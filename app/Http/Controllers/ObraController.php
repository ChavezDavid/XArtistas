<?php

namespace App\Http\Controllers;

use App\Obra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CategoriaObra;
Use App\User;

class ObraController extends Controller
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
    public function create()
    {
        $categorias_obra = CategoriaObra::all();

        return view('obras.create', compact('categorias_obra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $nueva_obra = new Obra();

        $nueva_obra->nombre = request('nombre_obra');
        $nueva_obra->id_autor = Auth::user()->id;
        $nueva_obra->descripcion = request('descripcion_obra');
        $nueva_obra->id_categoria = request('categoria_obra');

        if($request->hasFile('archivo_obra')){
            $file = $request->file('archivo_obra');
            $nameFile = Auth::user()->id.time().$file->getClientOriginalName();
            switch(request('categoria_obra')){
                case 1:
                    $path = "imagenes";
                break;
                case 2:
                    $path = "videos";
                break;
                case 3:
                    $path = "audios";
                break;
                case 4:
                    $path = "libros";
                break;
                default:
                    $path = "varios";
                break;
            }
            $file->move(public_path().'/img/uploads/'.$path.'/', $nameFile);
            $nueva_obra->enlace = $nameFile;
        }

        if($nueva_obra->save()){
            return view('index');
            return redirect()->route('obras.show', $nueva_obra->id);
        }
        return back()->with('error', 'No se pudo publicar la obra.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function show(Obra $obra)
    {
        //dd($obra);
        $autor = User::where('id', $obra->id_autor)->first();
        $obra->autor = $autor;

        return view('obras.show', compact('obra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function edit(Obra $obra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obra $obra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obra $obra)
    {
        //
    }
}
