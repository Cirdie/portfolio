<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    // Show About Section
    public function index()
    {
        $about = About::first();
        return view('admin.dashboard', compact('about'));
    }

    // Store About Information
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'hometown' => 'required|string',
        ]);

        About::create($request->all());

        return redirect()->back()->with('success', 'About information added successfully!');
    }

    // Update About Information
    public function update(Request $request, About $about)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'hometown' => 'required|string',
        ]);

        $about->update($request->all());

        return redirect()->back()->with('success', 'About information updated successfully!');
    }

    // Delete About Information
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->back()->with('success', 'About information deleted successfully!');
    }
}
