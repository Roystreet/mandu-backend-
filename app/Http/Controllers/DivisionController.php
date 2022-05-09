<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function create( Request $request)
    {

        
        $division = new Division;
        $division->name = $request->name;
        $division->level = $request->level;
        $division->collaborator = $request->collaborator;
        $division->embassador = $request->embassador;
        $division->upper_division_id = $request->upper_division_id;
        $division->save();

        return response()->json(["response"=>"created successfully"]) ; //
    }

    public function show(Request $request)
    {
        $division = Division::find($request->id);
        if(count((array)$division)>0){
            $division->subDivision;
            $division-> upperDivision;
            return response()->json(["response"=>$division]) ; //
        }else{
            return response()->json(["response"=>"Not fount"]) ; //
        }
    }

    public function update(Request $request)
    {
        $division = Division::find($request->id);
        if(count((array)$division)>0){
            
          $division->update($request->all());
            return response()->json(["response"=>"updated successfully"]) ;
            
        }else{
            return response()->json(["response"=>"Not Found"]);
        }
    }

    public function destroy(Request $request)

    {
        $division = Division::find($request->id);
       if(count((array)$division) > 0){
            $division->delete();
            return response()->json(["response"=>"Delete Successfully"]) ;//
        } else {
            return response()->json(["response"=>"Not Found"]) ;//
        }
    }
    
    public function totalDivisions(Request $request){
        $division = Division::all();

        $divisions= array();
        foreach ($division as $div) {
            $data= [
                "key"=>$div->id,
                "Division"=>$div->name,
                "Level"=>$div->level,
                "Colaboradores"=>$div->collaborator,
                "Embajadores"=>$div->embassador,
                "DivisionSuperior"=>Division::find($div->upper_division_id),
                "Subdivisions"=>Division::find($div->id)->subDivision,
            ];
            array_push($divisions,$data);
        }


        return response()->json(["response"=>$divisions]);
    }
    public function subDivisions(Request $request){

        $subDivision = Division::find($request->id)->subDivision;

        return response()->json(["response"=>$subDivision]);
    }
}
