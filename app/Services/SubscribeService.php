<?php

namespace App\Services;

use App\Mail\ContactUs;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class SubscribeService extends Servicer
{


    /**
     * https://github.com/spatie/laravel-newsletter
     */
    public function sendSubscribe($data)
    {

        if ($data) {

            // Newsletter::subscribe($data);
            return  Subscription::create(['email' => $data]);
        }
        return false;
    }

    public function deleteSubscribe()
    {
        Newsletter::delete('rincewind@discworld.com');
    }
}
