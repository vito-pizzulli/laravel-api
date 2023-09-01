<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {   
        if ($request->has('search')){
            $projects = Project::with('type', 'technologies')->where('title', 'LIKE', '%' . $request->search . '%')->paginate(20);
        } else {
            $projects = Project::with('type', 'technologies')->paginate(20);
        }

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show(string $slug) {
        $project = Project::with('type', 'technologies')->findOrFail($slug);
        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }
}
