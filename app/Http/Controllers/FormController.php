<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        // Send email to admin
        Mail::to('rizwan.sparklab@gmail.com')->send(new FormSubmitted($validated));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}