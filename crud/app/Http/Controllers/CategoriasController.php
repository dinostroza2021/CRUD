<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $categorias = Categorias::latest()->paginate(5);

        return view('categorias.index', compact('categorias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('categorias.create');
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
        $request->validate([
            'nombre' => 'required',

        ]);







        Categorias::create($request->all());

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria Creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorias  $Categorias
     * @return \Illuminate\Http\Response
     */
    public function show(Categorias $categoria)
    {
        //
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorias  $Categorias
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorias $categoria)
    {
        //

        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorias  $Categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorias $categoria)
    {
        //
        $request->validate([
            'nombre' => 'required',
        ]);

        $categoria->update($request->all());

        return redirect()->route('categorias.index')
            ->with('success', 'Producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $Categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorias $categoria)
    {
        //
        $categoria->delete();

        return redirect()->route('categorias.index')
            ->with('success', 'Producto Eliminado');
    }
}
