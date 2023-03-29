<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supply;
use Symfony\Component\HttpKernel\Profiler\Profile;

class pet_supply extends Controller
{
    public function supply()
    {
        return view('supplyinsertion');
    }
    public function stores(Request $request)
    {
        //image work for check
        // dd($request->file('Image')->getClientOriginalName());
        //To store all data of form with image

        echo "<pre>";
        print_r($request->all());
        $supply = new Supply;
        $image = $request->Image;//image through request is stored in $image variable
        $name = $image->getClientOriginalName();//now name of image is stored in $name
        $image->storeAs('public/images', $name);//storeAs is a function
        $supply->Supplies = $request['Supplies'];
        $supply->Price = $request['Price'];
        $supply->Quantity = $request['Quantity'];
        $supply->Image = $name;
        $supply->save();

        return back();
    }
}
