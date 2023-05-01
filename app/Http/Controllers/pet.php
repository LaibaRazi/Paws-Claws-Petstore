<?php

namespace App\Http\Controllers;

use App\Models\Petstore;
use Illuminate\Http\Request;

class pet extends Controller
{
    public function pet()
    {
        return view('petinsertion');
    }
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $petstore = new Petstore;
        //image
        $image = $request->Image;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/images', $name); //storeAs is a function
        //end image
        $petstore->PetName = $request['PetName'];
        $petstore->Category = $request['Category'];
        $petstore->BreedName = $request['BreedName'];
        $petstore->Price = $request['Price'];
        $petstore->Sale = $request['Sale'];
        $petstore->Image = $name;
        $petstore->save();

        return redirect()->back();
    }

    public function displaypet()
    {
        $petstore = Petstore::all();
        return view('pet-record-display',compact('petstore'));
    }

    public function delete($id)
    {
        $petstore = Petstore::where('Id_pet', $id)->delete();
        return back();
    }
    public function edit($id)
    {
        $petstore = Petstore::where('Id_pet', $id)->first();
        $data = compact('petstore');
        return view('insert-pet-edit')->with($data);
    }
    public function update(Request $request, Petstore $petstore)
    {
        // $petstore = Petstore::find($id);
        // $petstore->PetName = $request->input('PetName');
        // $petstore->Category = $request->input('Category');
        // $petstore->BreedName = $request->input('BreedName');
        // $petstore->Price = $request->input('Price');
        // $petstore->Sale = $request->input('Sale');

        $request->validate(
            [
                'PetName' => 'required',
                'Category' => 'required',
                'BreedName' => 'required',
                'Price' => 'required',
                'Sale' => 'required'

            ]
        );
        $input = $request->all();
        if ($Image = $request->file('Image')) {
            $destination = 'public/images';
            $filename = date('DD/MM/YYYY') . '.' . $Image->getClientOriginalExtension();

            $Image->move($destination, $filename);
            $petstore->Image = $filename;
            $input['Image']='$filename';
        }
        else{
            unset($input['Image']);
        }
        $petstore->update($input);

        $petstore = new Petstore;
        $data = compact('petstore');

        return redirect()->route('pet.display')->with($data);
        // return view('insert/display')->with($data);
    }
}
