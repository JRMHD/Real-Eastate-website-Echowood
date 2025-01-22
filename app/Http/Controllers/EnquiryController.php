<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Mail\EnquiryMail;
use App\Mail\EnquiryConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'echo_wood_interest' => 'required|string',
            'preferred_date' => 'required|date',
            'follow_up_date' => 'required|date',
            'message' => 'nullable|string',
        ]);

        // Store the enquiry in the database
        $enquiry = Enquiry::create($request->all());

        // Send email to the owner
        Mail::to('owner@example.com')->send(new EnquiryMail($enquiry));

        // Send email to the user (confirmation)
        Mail::to($request->email)->send(new EnquiryConfirmationMail($enquiry));

        // Return response with success message
        return response()->json([
            'message' => 'Your enquiry has been sent successfully. We will get back to you shortly.',
        ]);
    }
}
