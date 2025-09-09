<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:50', 'regex:/^[a-zA-Z\s\-\'"]+$/'],
            'email' => ['required','email','max:100'],
            'message' => ['required','string','min:10','max:1000'],
            'website' => ['nullable','max:0'] // honeypot, debe estar vacío
        ]);

        $name = strip_tags($validated['name']);
        $email = filter_var($validated['email'], FILTER_SANITIZE_EMAIL);
        $message = strip_tags($validated['message']);

        $blockedWords = ['obscene1','obscene2','offensiveWord'];
        foreach ($blockedWords as $word) {
            if (stripos($message, $word) !== false) {
                return back()->withErrors(['message' => 'Inappropriate content detected.']);
            }
        }

        Mail::to('support@thinkguille.space')
            ->send(new ContactFormMail($name, $email, $message));

        return back()->with('success','Your message has been sent successfully!');
    }
}
