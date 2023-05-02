<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class SieController
 * @package App\Http\Controllers
 */
class SieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function term()
    {
        return view('sieweb.terminos');
    }

    public function inicio()
    {
        return view('inicio');
    }

    public function servicios()
    {
        return view('servicios.contabilidad');
    }

    public function servicios2(){
        return view('servicios.capacitacion');
    }

    public function servicios3(){
        return view('servicios.soporte');
    }

    public function servicios4(){
        return view('servicios.programacion');
    }

    public function servicios5(){
        return view('servicios.diseñoymarketing');
    }

    public function servicios6(){
        return view('servicios.talleres');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sie $sie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $sie)
    {
        
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
       
    }
}
