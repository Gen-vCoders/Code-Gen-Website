<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\freshuser;

class ContactFormController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string|max:1000',
        ]);

        $contact = new ContactForm(); // Instantiate the ContactForm model

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');
        $contact->save();

        $formData = $request->all();
        $email = 'geniuscodeing@gmail.com';
        $response = Mail::to($email)->send(new ContactFormMail($formData));
        return response()->json(['message' => 'Form submitted successfully'], 200);
    }


    public function loginForm(Request $request)
    {
        $email = $request->input('email');
        
        $user = freshuser::where('email', $email)->first();

        // dd($user);
        if ($user == null) {
            return response()->json(['message' => 'Email exists'], 404);
        } else {
            return response()->json(['message' => 'Login Sucessfully'], 200);
        }
    }
}
