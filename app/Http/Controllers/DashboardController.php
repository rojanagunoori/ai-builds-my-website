<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $businesses = auth()->user()
            ->businesses()
            ->latest()
            ->get();

        return view('dashboard', compact('businesses'));
    }
}