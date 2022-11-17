<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\COntrollers\Controller;
use App\Auto;
class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos=Auto::all();
        return view( 'create',compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Auto $auto)
    {
    
        if($request->hasFile('foto')){
            $file= $request->file('foto');
            $name=time( ).$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            

            $auto = new Auto();
            $auto->marca=$request->input('marca');
            $auto->modelo=$request->input('modelo');
            $auto->daño=$request->input('daño');
            $auto->foto=$name;
            $auto->save();
            return redirect('autos/');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        return view('show',compact('auto'));

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Auto $auto)
    {
        return view('edit',compact('auto'));
        //return $auto;
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auto $auto)
    {
        //return $auto;
        //return $request;
        $auto-> fill($request->except('foto'));
        if ($request->hasFile('foto')){
            $file= $request->file('foto');
            $name=time( ).$file->getClientOriginalName();
            $auto->foto=$name;
            $file->move(public_path().'/images/',$name);
            
    }
        $auto->marca=$request->input('marca');
        $auto->modelo=$request->input('modelo');
        $auto->save();
        return redirect('autos/');
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
        $data= Auto::FindOrFail($id);
        $auto= Auto::find($id);

       if(file_exists('images/'.$data->foto)AND !empty($data->foto)){
            unlink('images/'.$data->foto);
        }
        try{
            $data->delete();
            $bug=0;
        }
        catch(\Exception $e){
            $bug= $e->errorInfo[1];}
        if($bug==0){
            echo "success";

        }else{
            echo 'error';
        }
        if ($auto->delete($id))
        {
            return redirect('autos/');

        }
        else return 'El '.$id. "No se pudo borrar";
        
    }
    public function imprimir(){
        $autos=Auto::all();

        $pdf = PDF::loadView('pdf',compact('autos'));
        return $pdf->download('ejemplo.pdf');
    }
    


}
