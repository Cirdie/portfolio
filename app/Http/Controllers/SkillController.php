<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    // ✅ Show Skills in Admin Dashboard
    public function index()
    {
        $skills = Skill::all();
        return view('admin.dashboard', compact('skills'));
    }

    // ✅ Store New Skill (Ensure Unique)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:skills,name', // ✅ Ensure skill name is unique
        ]);

        Skill::create(['name' => $request->name]);

        return redirect()->back()->with('success', 'Skill added successfully!');
    }

    // ✅ Delete Skill
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->back()->with('success', 'Skill deleted successfully!');
    }
}
