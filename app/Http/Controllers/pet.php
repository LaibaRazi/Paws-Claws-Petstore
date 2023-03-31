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
        $image=$request->Image;
        $name=$image->getClientOriginalName();
        $image->storeAs('public/images', $name);//storeAs is a function
        //end image
        $petstore->PetName=$request['PetName'];
        $petstore->Category=$request['Category'];
        $petstore->BreedName=$request['BreedName'];
        $petstore->Price=$request['Price'];
        $petstore->Sale=$request['Sale'];
        $petstore->Image=$name;
        $petstore->save();

        return redirect()->back();

    }

public function displaypet()
{
    $petstore = Petstore::all();
    $data=compact('petstore');
    return view('pet-record-display')->with($data);
}

public function delete($id)
{
    $petstore = Petstore::where('Id_pet', $id) ->delete();
    return back();
}

}
