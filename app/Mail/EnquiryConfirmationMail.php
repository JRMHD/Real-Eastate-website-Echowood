<?php

namespace App\Mail;

use App\Models\Enquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry;

    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this->view('emails.enquiry_confirmation')
            ->subject('Thank you for your enquiry - EchoWood')
            ->with([
                'enquiry' => $this->enquiry,
            ]);
    }
}
