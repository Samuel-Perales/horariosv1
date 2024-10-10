<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate();
        // return view("alumnos/index",['alumnos'=>$alumnos]);
        return view("Alumnos2/index",compact("alumnos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $alumnos = Alumno::paginate();
        // return view("Alumnos.create",compact("alumnos"));
        $alumnos = Alumno::paginate();
        $alumno = new Alumno;
        return view("Alumnos2.form",compact("alumnos",'alumno'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return request();
        $val = $request->validate([
            'nombre'=>"required",
            "apellidop"=>"required",
            "correo"=>"required"
        ]);
        Alumno::create($request->all());
        return redirect()->route("Alumnos.index")->with("mensaje","INSERTADO");
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $alumnos = Alumno::paginate();
        return view("Alumnos.show",compact("alumnos", "alumno"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $alumnos = Alumno::paginate(5);
        $accion = "E";
        return view("Alumnos2.form",compact("alumnos","alumno","accion"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
        return redirect()->route("Alumnos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route("Alumnos.index");
    }
}
