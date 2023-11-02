<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactRequestController extends Controller
{
    public function sendRequest(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => [
                'required',
                'email'
            ],
            'phone' => [
                'required',
                'numeric',
                'digits:10'
            ],
            'message' => [
                'max:1000'
            ]
        ]);

        Mail::to('prueba')->send(new ContactRequest($request->input()));

        return redirect('/contact');
    }
}
