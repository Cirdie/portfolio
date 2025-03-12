<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Skill;
use App\Models\Contact;

class AdminController extends Controller
{
    // ✅ Show Admin Dashboard
    public function dashboard()
    {
        return view('admin.dashboard', [
            'about' => About::first() ?? new About(),
            'skills' => Skill::all(),  // ✅ Ensure this is passed
            'contact' => Contact::first() ?? new Contact()
        ]);
    }


    // ✅ Add or Update About Section
    public function updateAbout(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'hometown' => 'required|string|max:255',
        ]);

        $about = About::first(); // Fetch the first About record

        if ($about) {
            $about->update($request->all());
            $message = 'About section updated!';
        } else {
            About::create($request->all());
            $message = 'About section added!';
        }

        return redirect()->back()->with('success', $message);
    }

    // ✅ Add Skill
    public function addSkill(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:skills,name',
        ]);

        Skill::create(['name' => $request->name]);

        return redirect()->back()->with('success', 'Skill added successfully!');
    }

    // ✅ Delete Skill
    public function deleteSkill($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->back()->with('success', 'Skill deleted successfully!');
    }

    // ✅ Update or Add Contact Information
    public function updateContact(Request $request)
    {
        $request->validate([
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'phone' => 'required|string|max:15',
        ]);

        $contact = Contact::first(); // Fetch the first Contact record

        if ($contact) {
            $contact->update($request->all());
            $message = 'Contact information updated!';
        } else {
            Contact::create($request->all());
            $message = 'Contact information added!';
        }

        return redirect()->back()->with('success', $message);
    }
}
