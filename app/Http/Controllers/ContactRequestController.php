<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactRequestController extends Controller
{
    public function sendRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
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

        if ($validator->fails()) {
            return redirect("/#contact")
                ->withErrors($validator)
                ->withInput();
        }

        Mail::to(
            env('MAIL_CONTACT')
        )->send(new ContactRequest($request->input()));

        return redirect("/#contact")
            ->with(['sent' => true]);
    }
}
