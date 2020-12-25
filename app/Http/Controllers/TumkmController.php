<?php

namespace App\Http\Controllers;

use App\Models\tumkm;
use Illuminate\Http\Request;

class TumkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tumkms = tumkm::all();
        return view('indexpawb', ['tumkms' => $tumkms]);
    }


    public function beranda()
    {
        $tumkms = tumkm::all();
        return view('indexpawb', ['tumkms' => $tumkms]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input_tumkm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedDATAtumkm = $request->validate([
            'jenis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
        ]);

        tumkm::create($validatedDATAtumkm);
        
        return redirect()->route('input_tumkm');
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
    public function edit($tumkm)
    {
       // tumkm::where('id', $tumkm)->edit();
        //return redirect()->route('indexpawb');
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
        tumkm::where('id', $id)->delete();
        return redirect()->route('indexpawb');
    }
}
