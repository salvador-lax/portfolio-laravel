<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactRequestController extends Controller
{
    public function sendRequest(Request $request)
    {
        $request->validate([
            'email' => [
                'required',
                'email'
            ],
            'phone' => [
                'required',
                'numeric',
                'digits_between:9,10'
            ],
            'message' => [
                'max:1000'
            ]
        ]);

        Mail::to(env('MAIL_CONTACT'))->send(new ContactRequest($request->input()));

        return back()
            ->with(['sent' => 'Your contact request has been send succesfully']);
    }
}
