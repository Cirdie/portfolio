<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Skill;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function index()
    {
        $about = About::first();
        $skills = Skill::all(); // Fetch data from the Skill model
        $contacts = Contact::all(); // Fetch data from the Contact model

        return view('portfolio.home', compact('about', 'skills', 'contacts'));
    }
}
