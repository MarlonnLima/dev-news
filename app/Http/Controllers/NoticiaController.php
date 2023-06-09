<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::paginate(8);
        
        return view('home', compact('noticias'));
    }

    public function adicionar()
    {
        if(auth()->check() && auth()->user()->isAdmin == 1){
            return view('site.adicionar');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(auth()->check() && auth()->user()->isAdmin == 1){
        $noticia = $request->all();
        
        if($request->imagem) {
            $noticia['imagem'] = $request->imagem->store('noticias');
        }
        $noticia['slug'] = Str::slug($request->titulo);
        $noticia['id_user'] = (int)$request->id_user;
        Noticia::create($noticia);

        return redirect()->route('site.index');
        }else{
            return redirect()->route('site.index');
        }
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        //
    }
    public function paraEditar($id){
        if(auth()->check() && auth()->user()->isAdmin == 1){
        $noticia = Noticia::where('id', $id)->first();

        return view('site.editarNoticia', compact('noticia'));
        }else{
            return redirect()->back();
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        Noticia::where('id', $request->id)->update([
                'titulo' => $request->titulo,
                'categoria' => $request->categoria,
                'descricao' => $request->descricao
            ]);
        return redirect()->route('site.index');
    }
    public function atualizarFoto($id){
        if(auth()->check() && auth()->user()->isAdmin == 1){
        return view('site.atualizarFoto', compact('id'));
        }else{
            return redirect()->back();
        }
    }
    public function AddNovaFoto(Request $request){
        $paraDeletar = Noticia::find($request->id);   
        $imagemParaDeletar = $paraDeletar->imagem; 
        Storage::delete([$imagemParaDeletar]);

        $noticia = $request->all();
        if($request->imagem) {
            $noticia['imagem'] = $request->imagem->store('noticias');
        }
        
        Noticia::where('id', $request->id)->update([
        'imagem' => $noticia['imagem'],
        ]);
        
        return redirect()->route('site.index');
    }

    public function buscar(Request $request){
        $noticias = Noticia::where('titulo', 'LIKE', '%' . $request['busca'] . '%')
        ->orWhere('categoria', 'LIKE', '%' . $request['busca'] . '%')
        ->get();
        
        if($noticias->isEmpty()){
            return view('site.busca');
        }else{
        return view('site.busca', compact('noticias'));
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->check() && auth()->user()->isAdmin == 1){
        $noticia = Noticia::find($id);
        $imagem = $noticia->imagem;
        Storage::delete([$imagem]);
        Noticia::destroy($id);
        return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
