<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portafolio;


class PortafolioController extends Controller
{
    
    public function index()
    {
        $portafolios = Portafolio::all();

        return view('portafolio.index',compact('portafolios'));

    }

    
    public function create()
    {
        return view ('portafolio.create');

    }

    
    public function store(Request $request)
    {
        Portafolio::create([
            'nombre'=> request('nombre'),
            'descripcion'=> request('descripcion'),
            'categoria'=> request('categoria'),
            'imagen'=> request('imagen'),
            'url'=> request('video')
        ]);

        return redirect()->route('portafolio');

    }

    
    public function show($id)
    {
        $portafolio = Portafolio::find($id);

        return view('portafolio.show',compact('portafolio'));


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
