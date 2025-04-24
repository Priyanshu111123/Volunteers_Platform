<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function index()
{
    $works = \App\Models\Work::latest()->get();
    return view('work.index', compact('works'));
}

    public function create()
    {
        return view('work.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Work::create([
            'client_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.client')->with('success', 'Work posted successfully!');
    }
}
