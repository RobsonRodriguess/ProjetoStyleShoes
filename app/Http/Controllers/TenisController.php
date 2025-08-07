<?php

namespace App\Http\Controllers;

use App\Models\Tenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenis = Tenis::all();
        return view('dashboard', compact('tenis'));
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tenis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nome' => 'required',
        'preco' => 'required|numeric',
        'categoria' => 'required',
        'imagem' => 'required|image|mimes:jpg,jpeg,png'
    ]);

    $path = $request->file('imagem')->store('tenis', 'public');

    Tenis::create([
        'nome' => $request->nome,
        'preco' => $request->preco,
        'categoria' => $request->categoria,
        'imagem' => $path,
    ]);

    return redirect()->route('dashboard');
}


    /**
     * Display the specified resource.
     */
    public function show(Tenis $tenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenis $tenis)
    {
        $tenis = Tenis::findOrFail($tenis);
        return view('tenis.edit', compact('tenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenis $tenis)
    {
        $tenis = Tenis::findOrFail($tenis);

        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'categoria' => 'required|string',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

         ]);

        $data = [
            'nome' => $request->nome,
            'preco' => $request->preco,
            'categoria' => $request->categoria,
        ];

        if ($request->hasFile('imagem')){
            Storage::delete('public/' . $tenis->imagem);
            $path = $request->file('imagem')->store('arquivos', 'public');
            $tenis->imagem = $path;

        $tenis->update($data);

        return redirect()->route('dashboard')->with('success', 'O Pênis foi atualizado com sucesso');
     }
    }
    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    $tenis = Tenis::findOrFail($id);

    if ($tenis->imagem) {
        Storage::delete('public/' . $tenis->imagem);
    }

    $tenis->delete();

    return redirect()->route('dashboard')->with('success', 'Tênis excluído com sucesso.');
}
}


