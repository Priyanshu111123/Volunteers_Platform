<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Work;

class DashboardController extends Controller
{
    public function index()
{
    $user = Auth::user();

    if ($user->role === 'client') {
        return redirect()->route('dashboard.client');
    } elseif ($user->role === 'volunteer') {
        return redirect()->route('home');
    }

    return redirect('/')->with('error', 'Invalid user role.');
}


    public function client()
    {
        // if (!Auth::check()) {
        //     return redirect('/login')->with('error', 'You must be logged in to view this page.');if ($user->role === 'client') {
        //         return redirect()->route('dashboard.client');
        //     } else {
        //         return redirect()->route('dashboard.volunteer'); // You can define this separately
        //     }
            
        // }
    
        $user = Auth::user();
        $works = Work::where('client_id', $user->id)->latest()->get();
    
        return view('client', compact('user', 'works'));
    }
}
