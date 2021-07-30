<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsControllerA extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // SQL
        // $projects = DB::select('select * from app.projects');

        // QUERY BUILDER
        // $projects = DB::table('app.projects')->get();

        // ELOQUENT
        $projects = Project::get();
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
        /*
        //$computers = ['ryzen','intel','hp'];
        $project = DB::insert('insert into app.projects (code,date,description,approved,title,created_at,updated_at)
        values (?,?,?,?,?,?,?)', [
        $request->code,
        $request->date,
        $request->description,
        $request->approved,
        $request->title,
        $request->created_at,
        $request->updated_at,
    ]);
*/
    $project = new Project();
        $project->code = $request->code;
        $project->date = $request->date;
        $project->description = $request->description;
        $project->approved = $request->approved;
        $project->title = $request->title;
        $project->save();


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
        // SQL
        // $projects = DB::select('select * from app.projects where id = ?', [$project]);

        // QUERY BUILDER
        // $project = DB::table('app.projects')->find($project);

        // ELOQUENT
        $project = Project::find($project);
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

        $project = new Project();
        $project->code = $request->code;
        $project->date = $request->date;
        $project->description = $request->description;
        $project->approved = $request->approved;
        $project->title = $request->title;
        $project->save();
        
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
