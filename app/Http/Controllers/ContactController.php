<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage()
    {
        $this->validate(request(), ['name' => 'required', 'email' => 'required|email', 'message' => 'required']);

        Mail::to('ryan@absolutesport.co.za')->send(new ContactMessage(request()->only('name', 'phone', 'email', 'message')));
        return redirect('/');
    }
}
