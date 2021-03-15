<?php

namespace App\Http\Livewire\Contact;

use App\Mail\ContactUs;
use App\Services\ContactUsMailService;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{

    public $fields = [
        'name' => '',
        'email' => '',
        'message' => '',
        'tele' => ''
    ];

    protected $rules = [
        'fields.name' => 'required|string',
        'fields.email' => 'required|email',
        'fields.message' => 'required|string',
        'fields.tele' => 'nullable|string'
    ];


    public function render()
    {
        return view('livewire.contact.contact');
    }

    public function submit(ContactUsMailService $service)
    {
        $this->validate();

        $action = $service->execute('sendEmail', $this->fields);
        
        if ($action) {

            $this->resetInput();

            return $this->sendNotificationTobrowser([
                'type' => 'success',
                'message' => 'Merci votre e-mail a été evnoyer'
            ]);
        }
        return false;
    }


    public function resetInput()
    {
        $this->fields = null;
    }


    private function sendNotificationTobrowser($options = [])
    {
        $this->dispatchBrowserEvent('emailSended', $options);
    }
}
