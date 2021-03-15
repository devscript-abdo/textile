<?php

namespace App\Http\Livewire\Subscribe;

use App\Services\SubscribeService;

use Livewire\Component;

class Subscribe extends Component
{

    public $email;

    protected $rules = [

        'email' => 'required|email|unique:subscriptions'
    ];

    protected $messages =  [
        'email.unique' => 'Merci mais vous êtes déjà inscrit',
    ];

    public function render()
    {
        return view('livewire.subscribe.subscribe');
    }


    public function submit(SubscribeService $service)
    {

        $this->validate();

        $action = $service->execute('sendSubscribe', $this->email);

        if ($action) {
            $this->resetInput();

            return $this->sendNotificationTobrowser([
                'type' => 'success',
                'message' => 'Merci pour votre inscription '
            ]);
        }
        return false;
    }


    public function resetInput()
    {
        $this->email = null;
    }


    private function sendNotificationTobrowser($options = [])
    {
        $this->dispatchBrowserEvent('emailSended', $options);
    }
}
