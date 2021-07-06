<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libros = Libro::all();
        return view('catalogo')->with('libros', $libros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*
        $fields = request()->validate([
            'title' => 'required',
            'autor' => 'required',
            'editorial' => 'required', 
            'year_edition' => 'required|numeric'
        ],
        [
        'title.required' => 'El título del libro es indispensable',
        'autor.required' => 'No olvides ingresar el nombre del autor',
        ]);

        Libro::create($fields);
        */

        $libro = new Libro;

        $libro->titulo = $request->get('title');
        $libro->autor = $request->get('autor');
        $libro->editorial = $request->get('editorial');
        $libro->anio_edicion = $request->get('year_edition');

        $libro->save();

        
        return 'Libro guardado con éxito';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::where('id_libro', $id)->firstOrFail();
        return view('libros.show')->with('libro', $libro);
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
