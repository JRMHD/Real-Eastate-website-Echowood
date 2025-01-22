<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_contact' => 'required|string|max:255',
            'lastname_contact' => 'nullable|string|max:255',
            'email_contact' => 'required|email|max:255',
            'phone_contact' => 'nullable|string|max:20',
            'message_contact' => 'required|string',
            'subject_contact' => 'required|string',
            'verify_contact' => 'required|in:4',
        ]);

        $contact = Contact::create([
            'name' => $validated['name_contact'],
            'last_name' => $validated['lastname_contact'],
            'email' => $validated['email_contact'],
            'phone' => $validated['phone_contact'],
            'message' => $validated['message_contact'],
            'subject' => $validated['subject_contact'],
        ]);

        // Send email
        Mail::to('Maryanyangobell@gmail.com')->send(new ContactFormMail($contact));

        return response()->json(['message' => 'Form submitted successfully!']);
    }
}
