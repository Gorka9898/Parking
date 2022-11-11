<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;

class controladorCoches extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coche=Coche::all();
        return view("inicio")->with("elCoche", $coche);
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
    public function delete($id)
    {
        $coche = Coche::find($id);
        $coche->delete();

        return redirect('/');
        
    }
        public function store(Request $request)
        {
            $request->validate([

                'matricula'=>'required |max:7',
                'marca'=>'required',
                'modelo'=>'required'
               
             ]);         
           
        $coche= new Coche;
            $coche->matricula= $request['matricula'];
            $coche->marca= $request['marca'];
            $coche->modelo= $request['modelo'];
        // add other fields
        $coche->save();
               
            return redirect('/',);
        }
  
    
    
    public function crear_coches_formulario()
    {
        return view("Nuevo_coche");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        return view("Lista_coches");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscador()
    {
        return view("Buscar_coche");
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
