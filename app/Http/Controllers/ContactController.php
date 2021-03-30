<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\ContactRequest;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('textile.pages.contact.index');
    }

    public function store(ContactRequest $request)
    {
        //dd($request, '------------');

        $data = $request->except(['_token', 'valid_from']);

        $email = setting('contact.email_reciver') ?? 'contact@' . request()->getHost();

        if ($email) {

            Mail::to($email)->send(new ContactUs($data));

            return redirect()->route('contact')->with('isSent', 'merci pour votre message');
        }
    }
}
