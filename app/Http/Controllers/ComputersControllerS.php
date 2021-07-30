<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComputersControllerS extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SQL
        // $computers = DB::select('select * from app.computer');

        // QUERY BUILDER
        // $computers = DB::table('app.computer')->get();

        // ELOQUENT
        $computers = Computer::get();
        return response()->json(
            [
                'data' => $computers,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de la computadora y la empresa es correcta',
                    'code' => '200'
                ]

            ],200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $computers = new Computer();
        $computers->brand = $request->brand;
        $computers->color = $request->color;
        $computers->code = $request->code;
        $computers->weight = $request->weight;
        $computers->model = $request->model;
        $computers->save();


        return response()->json(
            [
                'data' => $computers,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de la computadora y la empresa es correcta',
                    'code' => '200'
                ]

            ],200
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computers = Computer::find($computers);
        return response()->json(
            [
                'data' => $computers,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de la computadora y la empresa es correcta',
                    'code' => '200'
                ]

            ],200
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $computers = new Computer();
        $computers->brand = $request->brand;
        $computers->color = $request->color;
        $computers->code = $request->code;
        $computers->weight = $request->weight;
        $computers->model = $request->model;
        $computers->save();

        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'actualizacion correcta',
                    'detail' => 'los datos se han actualizado',
                    'code' => '201'
                ]

            ],201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $computer = Computer::find($computer);
        $computer->delete();
        return response()->json(
            [
                'data' => $computer,
                'msg' => [
                    'summary' => 'eliminacion correcta',
                    'detail' => 'dato eliminado',
                    'code' => '201'
                ]

            ],201
        );
    }
    public function updateState()
    {
        $computer = 'computer';
        return response()->json(
            [
                'data' => $computer,
                'msg' => [
                    'summary' => 'actualizacion correcta',
                    'detail' => 'el estado del proyecto se actualizo ',
                    'code' => '201'
                ]

            ],201
        );
    }
}
