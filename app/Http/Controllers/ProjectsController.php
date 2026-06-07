<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = auth()->user()->projects;
        return response()->json($projects);
    }
    public function latestProjects()
    {
        // Último proyecto del usuario autenticado (por created_at)
        $project = auth()->user()->projects()->latest()->first();

        // Si quieres el último modificado (por updated_at):
        // $project = auth()->user()->projects()->orderBy('updated_at', 'desc')->first();

        return response()->json($project); // devuelve objeto o null
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'descripcio' => 'nullable',
            'data_ini' => 'required',
            'data_fi' => 'required',
        ]);

        $project = Project::create([
            'nom' => $request->nom,
            'descripcio' => $request->descripcio,
            'data_ini' => $request->data_ini,
            'data_fi' => $request->data_fi,
            'user_id' => auth()->id(),
        ]);

        return response()->json($project, 201);
    }

    /**
     * Display the specified resource.
     */
    /*
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return response()->json($project);
    }
    */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return response()->json([
            'id' => $project->id,
            'nom' => $project->nom,
            'descripcio' => $project->descripcio,
            'data_ini' => $project->data_ini->format('Y-m-d'),
            'data_fi' => $project->data_fi->format('Y-m-d'),
            'user_id' => $project->user_id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);
         $request->validate([
            'nom' => 'required',
            'descripcio' => 'nullable',
            'data_ini' => 'required',
            'data_fi' => 'required',
        ]);
        $project->update([
            'nom' => $request->nom,
            'descripcio' => $request->descripcio,
            'data_ini' => $request->data_ini,
            'data_fi' => $request->data_fi,
        ]);
        return response()->json($project, 200);
    }

        /**
         * Remove the specified resource from storage.
         */
    public function destroy(string $id)
    {
        //
    }
    }
