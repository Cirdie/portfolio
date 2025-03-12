<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Show Contact Information
    public function index()
    {
        $contact = Contact::first();
        return view('admin.dashboard', compact('contact'));
    }

    // Store Contact Information
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Contact information added successfully!');
    }

    // Update Contact Information
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $contact->update($request->all());

        return redirect()->back()->with('success', 'Contact information updated successfully!');
    }
}
