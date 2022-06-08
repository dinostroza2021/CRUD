<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;




class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $productos = Productos::all();
        return response()->json($productos);
    }

    public function categoria($id)
    {
        //

        $categoria = Productos::where('categoria', '=', $id)->get();
        if (!empty($categoria)) {
            return response()->json($categoria);
        } else {
            return response()->json([
                "message" => "No se encontraron productos de esa categoria"
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    //     return Productos::create($request->all());
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $productos = Productos::find($id);

        if (!empty($productos)) {
            return response()->json($productos);
        } else {
            return response()->json([
                "message" => "No se encontraron productos"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    //     $article = Productos::findOrFail($id);
    //     $article->update($request->all());

    //     return $article;
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    //     $article = Productos::findOrFail($id);
    //     $article->delete();

    //     return 204;
    // }
}
