<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgrammingLanguageRequest;
use App\preparcialHospital;
use Illuminate\Http\Request;

class PreparcialHospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('preparcial_Hopital.index' , [
            'preparcial_Hopitales' => preparcialHospital::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preparcial_Hopital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(ProgrammingLanguageRequest $request)
    {
        //Antes de almacenar en base de  datos primero validar que los datos son correctos
        /*$request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'release_year' => 'required|integer',
            'actual_version' => 'required|max:10',
        ],
[
            'name.required' => 'El campo nombre debe ser llenado',
            'actual_version.required' => 'La versión actual no puede estar vacía (Busque en google)'
        ]

        );*/

        //Si las validaciones NO pasan, el código se ejecuta hasta aqui

        //Si las validaciones pasan, el código se sigue ejecutando

        $status = $request->get('status');
        /*true or false*/
        $status = isset($status);

        $hospitales = new preparcialHospital;
        $hospitales->name = $request->get('name');
        $hospitales->patients = $request->get('patients');
        $hospitales->status = $status;

        $hospitales->save();

        return redirect('/hospitales');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $preparcial_Hopital = preparcialHospital::find($id);

        return view('preparcial_Hopital.edit' , [
            'preparcial_hospital' => $preparcial_Hopital
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgrammingLanguageRequest $request, $id)
    {
        /*$request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'release_year' => 'required|integer',
            'actual_version' => 'required|max:10',
        ],
            [
                'name.required' => 'El campo nombre debe ser llenado',
                'actual_version.required' => 'La versión actual no puede estar vacía (Busque en google)'
            ]

        );*/

        $status = $request->get('status');
        /*true or false*/
        $status = isset($status);

        $hospitales = preparcialHospital::find($id);
        $hospitales->name = $request->get('name');
        $hospitales->patients = $request->get('description', 'Sin descripción');
        $hospitales->status = $status;

        $hospitales->save();

        return redirect('/hospitales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $preparcial_Hopital = preparcialHospital::find($id);
        $preparcial_Hopital->delete();
        return back();
    }
}
