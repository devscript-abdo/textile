<?php

namespace App\Http\Livewire\Comment;

use App\Repository\Comment\CommentInterface;
use Livewire\Component;

class Comments extends Component
{
    public $post;

    public $fields = [
        'name' => '',
        'email' => '',
        'commenter' => '',
        'postId' => ''
    ];

    protected $rules = [
        'fields.name' => 'required|string',
        'fields.email' => 'nullable|email',
        'fields.commenter' => 'required|string'
    ];

    public function render()
    {
        return view('livewire.comment.comments');
    }

    public function submit(CommentInterface $comment)
    {
        $this->validate();

        $this->post->comments()->create($this->fields);

        $this->clear();
        return $this->sendNotificationTobrowser([
            'type' => 'success',
            'message' => 'Merci votre commenter a été evnoyer'
        ]);
    }

    public function clear()
    {
        $this->fields = null;
    }

    private function sendNotificationTobrowser($options = [])
    {
        $this->dispatchBrowserEvent('emailSended', $options);
    }
}
