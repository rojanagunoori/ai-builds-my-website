<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BusinessController extends Controller
{
    public function create(): View
    {
        return view('business.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:30',
            'email' => 'nullable|email|max:255',
            'description' => 'nullable|string',
            'website_url' => 'nullable|url|max:255',
            'facebook_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'google_business_url' => 'nullable|url|max:255',
        ]);

        $request->user()->businesses()->create($validated);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Business details saved successfully!');
    }
}