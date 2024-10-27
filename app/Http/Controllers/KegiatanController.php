<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.form');
    }
    public function data()
    {

        $kegiatan = kegiatan::all();


        return view('kegiatan.data', compact('kegiatan'));
    }

    public function detail(Kegiatan $kegiatan)
    {
        return view('kegiatan.detail', compact('kegiatan'));
    }
    
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */     
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hari' => 'required|string',
            'kegiatan' => 'required|string',	
            'waktu' => 'required|string',
        ]);

        Kegiatan::create($validatedData);

        return redirect()->route('kegiatan.form')->with('success', 'Kegiatan berhasil disimpan.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit',compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validatedData = $request->validate([
            'hari' => 'required|string',
            'kegiatan' => 'required|string',
            'waktu' => 'required|string'
        ]);
        $kegiatan->update($validatedData);
        return redirect()->route('data')->with('succsess','data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
    * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        // return view('kegiatan.data', compact('kegiatan'));
        return redirect()->route('data')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
