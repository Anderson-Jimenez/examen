<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class MissatgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$missatges = Mensaje::with(['remitente', 'destinatario'])->get();
        $missatges = Mensaje::where('remitente_id', auth()->id())->with('destinatario')->get();
        return response()->json($missatges);
        */
        $missatges = Mensaje::where('remitente_id',"!=" ,auth()->id())->with('remitente')->get();
        return response()->json($missatges);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'destinatario_id' => 'required',
            'assumpte' => 'required',
            'missatge' => 'required',
        ]);

        $missatge = Mensaje::create([
            'remitente_id' => auth()->id(),
            'destinatario_id' => $request->destinatario_id,
            'asunto' => $request->assumpte,
            'mensaje' => $request->missatge,
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $missatge = Mensaje::with(['remitente', 'destinatario'])->findOrFail($id);
        return response()->json($missatge);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function missatgesEntrada()
    {
        $missatges = Mensaje::where('remitente_id',"!=" ,auth()->id())->with('remitente')->get();
        return response()->json($missatges);
    }
    public function missatgesSortida()
    {
        $missatges = Mensaje::where('remitente_id',auth()->id())->with('remitente')->get();
        return response()->json($missatges);
    }
}
