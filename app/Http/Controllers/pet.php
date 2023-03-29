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
        $petstore->PetName=$request['PetName'];
        $petstore->Category=$request['Category'];
        $petstore->BreedName=$request['BreedName'];
        $petstore->Price=$request['Price'];
        $petstore->Sale=$request['Sale'];
        $petstore->save();

        return redirect('index');

    }


}
