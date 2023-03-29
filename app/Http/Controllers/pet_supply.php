<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supply;

class pet_supply extends Controller
{
    public function supply()
    {
        return view('supplyinsertion');
    }
    public function stores(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $supply = new Supply;
        $supply->Supplies=$request['Supplies'];
        $supply->Price=$request['Price'];
        $supply->Quantity=$request['Quantity'];

        $supply->save();

        return redirect()->back();

    }
}
