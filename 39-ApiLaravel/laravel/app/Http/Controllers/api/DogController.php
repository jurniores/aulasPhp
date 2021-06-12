<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dog;
class DogController extends Controller
{

    public function index()
    {
        return Dog::all();
    }



    public function store(Request $request)
    {
        return $request;
    }


    public function show($id)
    {
        return $id;
    }



    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
