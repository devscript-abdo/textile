<?php

namespace App\Services;

use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactUsMailService extends Servicer
{


    public function sendEmail($data)
    {
        $email = setting('contact.email_reciver') ? setting('contact.email_reciver') : 'contact@haymacproduction.ma';

        if ($data) {

            Mail::to($email)->send(new ContactUs($data));

            return true;
        }
        return false;
    }
}
