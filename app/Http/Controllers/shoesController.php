<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shoesController extends Controller
{
    
    public function index()
    {
        $shoe = Shoe::get();
        return response()->json(
           ['data'=> $shoe,
           'msg'=>['sumary'=> 'consulta sucessfull',
           'detail'=>'la consulta es exitosa 200', 
           'code'=>'201']], 201);
            return ['nike','adidas'];
        

    }
    public function store(Request $request)
    {
        $shoe = new Shoe();
        $shoe->names = $request->names;
        $shoe->email = $request->email;
        $shoe->description= $request->description;
        $shoe->save();

        
        return response()->json(
           ['data'=> null,
           'msg'=>['sumary'=> 'request succesfull',
           'detail'=>'la consulta es exitosa', 
           'code'=>'201']], 201);
        
    }

    public function show($shoe)
    {
        $shoe = Shoe::find($shoe);

        return response()->json(

           ['data'=> $shoe,
           'msg'=>['sumary'=> 'request succesfull',
           'detail'=>'la consulta es exitosa', 
           'code'=>'201']], 201);
       
    }

    public function update(Request $request, $shoe)
    {
        $shoe = Shoe::find($shoe);
        $shoe->names = $request->names;
        $shoe->email = $request->email;
        $shoe->description= $request->description;
        $shoe->save();
        
        return response()->json(
            ['data'=> null,
            'msg'=>['sumary'=> 'subida correcta',
            'detail'=>'la subida es correcta', 
            'code'=>'201']], 201);
         
    }

    public function destroy($shoe)
    {
        $shoe = Shoe::find($shoe);
        $shoe->delete();
        return response()->json(
            ['data'=> null,
            'msg'=>['sumary'=> 'elimnado item correcto',
            'detail'=>'delete sucessfull', 
            'code'=>'201']], 201);
         
}
public function updateState($id)
{
return response()->json(
    ['data'=> null,
    'msg'=>['sumary'=> 'actualizacion correcta',
    'detail'=>'la actualizacion es correcta', 
    'code'=>'201']], 201);

  }
}
