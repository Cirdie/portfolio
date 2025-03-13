<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    // ✅ Show About Section in Portfolio Page
    public function show()
    {
        $about = About::first(); // ✅ Fetch only ONE record
        return view('portfolio.about', compact('about')); // ✅ Pass the data to the correct view
    }

    // ✅ Store About Information
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'studied_at' => 'nullable|string|max:255',
            'hometown' => 'required|string|max:255',
            'course' => 'nullable|string|max:255',
            'hobbies' => 'nullable|string|max:500',
        ]);

        About::create($request->all());

        return redirect()->back()->with('success', 'About information added successfully!');
    }

    // ✅ Update About Information
    public function update(Request $request, $about = null)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'studied_at' => 'nullable|string|max:255',
            'hometown' => 'required|string|max:255',
            'course' => 'nullable|string|max:255',
            'hobbies' => 'nullable|string|max:500',
        ]);

        $aboutRecord = About::first(); // ✅ Ensure we fetch one record

        if ($aboutRecord) {
            $aboutRecord->update($request->all());
            $message = 'About section updated!';
        } else {
            About::create($request->all());
            $message = 'About section added!';
        }

        return redirect()->back()->with('success', $message);
    }

    // ✅ Delete About Information
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->back()->with('success', 'About information deleted successfully!');
    }
}
