<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoe = ['nike','adidas'];
        return response()->json(
            [
                'data' => $shoe,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de los zapatos es correcta',
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
        $shoe = ['nike','adidas'];
        return response()->json(
            [
                'data' => $shoe,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de los zapatos y marca es correcta',
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
        $shoe = ['nike','adidas'];
        return response()->json(
            [
                'data' => $shoe,
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
        $shoe = '';
        return response()->json(
            [
                'data' => $shoe,
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
        $shoe = '';
        return response()->json(
            [
                'data' => $shoe,
                'msg' => [
                    'summary' => 'actualizacion correcta',
                    'detail' => 'el estado se actualizo ',
                    'code' => '201'
                ]

            ],201
        );
    }
}
