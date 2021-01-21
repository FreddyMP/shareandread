<?php

namespace App\Http\Controllers;
use App\Http\Requests\camposHistoria;
use Illuminate\Http\Request;
use App\Historia;
use App\Genero;

class historiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perfil($user_id)
    {
    }
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_test = "test";
        return view("historias.create", compact("user_test"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(camposHistoria $request)
    {
        $new_historia= new Historia;
        $new_historia->nombreHistoria= $request->nombreHistoria;
        $new_historia->creador= $request->creador;
        $new_historia->likes= $request->likes;
        $new_historia->descripcion= $request->descripcion;
        if($request->file('file')){
            $new_historia->urlImagen= $nombre;
            $nombre = $request->file('imagen')->getClientOriginalName();
            $request->file("imagen")->move('images',$nombre);
        }

        $new_historia_genero = new Genero;
        $new_historia_genero->idHistoria =  $request->nombreHistoria;
        $new_historia_genero->terror =  $request->terror;
        $new_historia_genero->romance =  $request->romance;
        $new_historia_genero->suspenso =  $request->suspenso;
        $new_historia_genero->drama =  $request->drama;
        $new_historia_genero->deportes =  $request->deportes;
        $new_historia_genero->historico =  $request->historico;
        $new_historia_genero->accion =  $request->accion;
        $new_historia_genero->formativo =  $request->formativo;
        
        
        $new_historia_genero->save();
        $new_historia->save();
        $userTest = "test";
        return view("historias.create", compact("userTest"));
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
