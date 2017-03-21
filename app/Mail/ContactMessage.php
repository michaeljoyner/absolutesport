<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $sender_name;
    public $sender_email;
    public $sender_phone;
    public $enquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->sender_name = $data['name'];
        $this->sender_email = $data['email'];
        $this->sender_phone = $data['phone'];
        $this->enquiry = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@absolutesport.co.za')->subject('AbsoluteSport site message from ' . $this->sender_name)->view('emails.contact');
    }
}
