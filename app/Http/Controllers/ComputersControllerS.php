<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputersControllerS extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = ['ryzen','samsung','intel','redmi','huawei','hp'];
        return response()->json(
            [
                'data' => $computers,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de las computadoras esta correcta',
                    'code' => '201'
                ]

            ],201
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
        $computers = ['ryzen','samsung','intel','redmi','huawei','hp'];
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
        $computers = ['ryzen','samsung','intel','redmi','huawei','hp'];
        return response()->json(
            [
                'data' => $computer,
                'msg' => [
                    'summary' => 'creacion correcta',
                    'detail' => 'el dato ha sido creado',
                    'code' => '201'
                ]

            ],201
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
        $computer = 'computer';
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
