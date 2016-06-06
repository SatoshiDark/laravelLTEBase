<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Paciente;

use App\Hematologia;

class HematologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {
        $paciente=Paciente::findOrFail($id);
        return view('analisis.hematologia.create')->withPaciente($paciente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $this->validate($request,[
            'dni'=>'required|unique:pacientes',
            'first_name'=>'required',
            'last_name'=>'required',
            'age'=>'required',
            'gender'=>'required',
        ]);*/

        $paciente=Paciente::findOrFail($request->user_id);
        $input = $request->all();
        $data = new Hematologia();
        $data ->fill($input);
        $data ->dni=$paciente->dni;
        $data ->user_id=$paciente->id;
        $data ->save();
        return Redirect('hematologia/'.$data->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $hematologia = Hematologia::findOrFail($id);
            $paciente = Paciente::findOrFail($hematologia->user_id);
        return view('analisis.hematologia.show',['paciente' => $paciente])->withHematologia($hematologia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
