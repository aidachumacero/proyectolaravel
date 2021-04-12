<?php

namespace App\Http\Controllers\modulo_transporte;
//esta ruta es para agregar un archivo dentro de controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Viaje;
use App\Models\Bus;
use App\Models\Usuario;

class ViajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viajes=Viaje::all();
       //dd($viajes);
        return view('modulo_transporte.viajes.index')->with('viajes', $viajes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulo_transporte.viajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $usuario = Usuario::where('ci', $request->ci)->get()->last();
        $bus = Bus::where('placa',$request->placa)->get()->last();
        //dd($bus->id);
        $viaje = Viaje::create([
            'origen' => $request->origen,
            'destino' => $request->destino,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
           // 'fecha_hora_llegada' => $request->fecha_hora_llegada,
           // 'codigo_bus'=> $request->codigo_bus,
            'usuario_id' => $usuario->id,
            'bus_id' => $bus->id
           
        ]);
        return redirect()->route('viajes')->with('message','viaje registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('modulo_transporte.viajes.show', [
            'viaje' => $viaje
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
      //  return redirect()->route('viajes')->with('message', 'actualizado');
        $viajes = Viaje::find($id);
        //dd($viajes);
       return view('modulo_transporte.viajes.edit', [
           'viaje'=> $viajes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viaje $viaje)
    {
        /*$viaje->update([
            'origen' => $request->origen,
            'destino' => $request->destino,
            'fecha_hora_salida' => $request->fecha_hora_salida,
            'fecha_hora_llegada' => $request->fecha_hora_llegada,
            'codigo_bus'=> $request->codigo_bus,

        ]);
        */
       //return redirect()->route(viajes)->with('message','informacion de viaje actualiazado');
       //$viajes = Viaje::find($id); 
       $viaje->update([
            'origen' => $request->origen,
            'destino' => $request->destino,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
           // 'codigo_bus'=> $request->codigo_bus,
        ]);

        session()->flash('message', 'Información de viaje actualizado.');

        //alert()->success('Bien', 'Viaje actualizado exitosamente.')->autoClose(3000);

        return redirect()->route('viajes.index');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viaje $viaje)
    {
        $message = '';

        if ( $viaje->delete() ) {
            
           alert()->success('Exito', 'Viaje eliminado exitosamente.')->autoClose(3000);

            return redirect()->route('viajes.index');
        }

        alert()->error('SuccessAlert', 'NO se pudo eliminar el viaje.')->autoCLose(3000);

        return redirect()->route('viajes.index');
    
    }
}
