<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // PASSA TUTTO ( MA NON LE TABELLE RELZIONATE )
        // $projects = Project::paginate(20);

        // SPECIFICA ANCHE LE TABELLE RELAZIONATE 
        $projects = Project::with('technologies', 'type')->paginate(10);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show(string $slug)
    {
        $project = Project::where('slug', $slug)->with('technologies', 'type')->first();

        if ($project) {
            return response()->json([
                'success' => true,
                'results' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => $project
            ], 404);
        }
    }
}