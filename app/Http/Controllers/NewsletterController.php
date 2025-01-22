<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Mail\NewsletterConfirmationMail;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email_newsletter' => 'required|email',
        ]);

        try {
            // Store email in the database
            Newsletter::create([
                'email' => $request->email_newsletter,
            ]);

            // Send confirmation emails
            Mail::to($request->email_newsletter)->send(new NewsletterConfirmationMail($request->email_newsletter));
            Mail::to('owner@example.com')->send(new NewsletterMail($request->email_newsletter));

            return response()->json(['message' => 'Thank you for subscribing to our newsletter!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while processing your request.'], 500);
        }
    }
}
