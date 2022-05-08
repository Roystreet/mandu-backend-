<?php

namespace App\Http\Controllers;

use App\Models\division;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function create( Request $request)
    {
        return response()->json(["response"=>"hola"]) ; //
    }

    public function show(Request $request, $id)
    {
        $division = division::find($id);
        return response()->json(["response"=>"hola"]);
    }

    public function update(Request $request)
    {
        return response()->json(["response"=>"hola"]) ;//
    }

   
    public function destroy(Requests $request)
    {
        return response()->json(["response"=>"hola"]);
    }
    
    public function totalDivisions(Request $request){
        return response()->json(["response"=>"hola"]);
    }
    public function subDivisions(Request $request){
        return response()->json(["response"=>"hola"]);
    }
}
