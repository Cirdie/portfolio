<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // ✅ Show Contact Information in Admin Dashboard
    public function index()
    {
        $contact = Contact::first(); // ✅ Fetch the first and only contact record
        return view('admin.dashboard', compact('contact'));
    }

    // ✅ Store or Update Contact Information (Only One Record Allowed)
    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'phone' => 'required|string|max:15',
        ]);

        $contact = Contact::first(); // ✅ Fetch the first contact record

        if ($contact) {
            $contact->update($request->only(['facebook', 'instagram', 'phone']));
            $message = 'Contact information updated!';
        } else {
            Contact::create($request->only(['facebook', 'instagram', 'phone']));
            $message = 'Contact information added!';
        }

        return redirect()->back()->with('success', $message);
    }

    // ✅ Delete Contact Information
    public function destroy()
    {
        $contact = Contact::first();

        if ($contact) {
            $contact->delete();
            return redirect()->back()->with('success', 'Contact deleted successfully!');
        }

        return redirect()->back()->with('error', 'No contact information to delete.');
    }
}
