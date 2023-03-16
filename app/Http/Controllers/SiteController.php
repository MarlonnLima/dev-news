<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::paginate(8);
        
        return view('site.home', compact('noticias'));
    }

    public function details($id)
    {
        $noticia = Noticia::where('id', $id)->first();

        return view('site.details', compact('noticia'));

    }

    public function login()
    {
        return view('site.login');
    }

    public function cadastrar()
    {
        return view('site.register');
    }

    public function criarUsuario(Request $request)
    {
        Usuario::create([
        'nome' =>  $request['nome'],
        'email' =>  $request['usuario'],
        'senha' =>  md5($request['senha']),
        'isAdmin' => 0,
        ]);

        return redirect()->route('site.login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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
