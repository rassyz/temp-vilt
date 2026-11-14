<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Inertia\Inertia;
use Inertia\Response;

class CatatanController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Catatan/Index', [
            'catatans' => Catatan::latest()->get(['id', 'judul', 'isi', 'created_at']),
            'total' => Catatan::count(),
        ]);
    }
}
