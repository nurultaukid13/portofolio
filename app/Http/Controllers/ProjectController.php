<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Sample projects data - replace with your own
        $projects = [
            [
                'title' => 'Project 1',
                'slug' => 'project-1',
                'description' => 'Description of project 1',
                'image' => 'https://via.placeholder.com/400x300',
                'tags' => ['Laravel', 'Tailwind', 'MySQL'],
                'github' => 'https://github.com',
                'demo' => 'https://demo.com',
            ],
            [
                'title' => 'Project 2',
                'slug' => 'project-2',
                'description' => 'Description of project 2',
                'image' => 'https://via.placeholder.com/400x300',
                'tags' => ['PHP', 'JavaScript', 'API'],
                'github' => 'https://github.com',
                'demo' => 'https://demo.com',
            ],
        ];

        return view('projects', compact('projects'));
    }

    public function show($slug)
    {
        // Sample project detail - replace with database query
        $project = [
            'title' => 'Project Detail',
            'slug' => $slug,
            'description' => 'Detailed description of the project',
            'image' => 'https://via.placeholder.com/800x400',
            'tags' => ['Laravel', 'Tailwind', 'MySQL'],
            'github' => 'https://github.com',
            'demo' => 'https://demo.com',
            'content' => '<p>Full project description here...</p>',
        ];

        return view('project-detail', compact('project'));
    }
}
