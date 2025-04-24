<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    public function index()
    {
        $works = \App\Models\Work::latest()->get();
        return view('work.index', compact('works'));
    }
    
    protected $fillable = [
        'client_id',
        'title',
        'description',
    ];
}
