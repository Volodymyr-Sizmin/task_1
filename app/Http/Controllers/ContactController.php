<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect('/')->with('success', 'Message was successfully sent');;
    }

    public function contact()
    {
        return view('contact', ['data' => Contact::all()]);
    }
}
