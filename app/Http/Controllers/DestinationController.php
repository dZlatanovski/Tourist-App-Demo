<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Destination;

class DestinationController extends Controller
{
    public function index(){

        return Destination::all();
    }

    public function show($id){
        $destination = Destination::findOrFail($id);
        return $destination;
    }

    public function store(Request $request){

        $destination = Destination::create($request->all());
        return response()->json($destionation, 201);
    }

    public function update(Request $request, Destination $destination){
      
        $destination->update($request->all());

        return response()->json($destination,200);
    }

    public function delete(Destination $destination){

        $destination->delete();

        return response()->json(null,204);
    }
}
