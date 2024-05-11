<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\freshuser;

class SubmissionForm extends Controller
{
    public function showForm()
    {
        return view('login');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'selectedgender' => 'nullable|string|in:female,male',
            'content' => 'nullable|array', 
        ]);

        $user = new freshuser();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->gender = $request->input('selectedgender');
        $user->content = json_encode($request->input('content'));

        $user->save();

        return back()->with('success', 'Form submitted successfully!');
    }
}
