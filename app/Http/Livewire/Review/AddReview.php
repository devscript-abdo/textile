<?php

namespace App\Http\Livewire\Review;

use App\Models\Review;
use Livewire\Component;

class AddReview extends Component
{

    public $fields = [
        'nom' => '',
        'email' => '',
        'content' => '',
    ];

    public $productId;

    public function render()
    {
        return view('livewire.review.add-review');
    }

    public function mount(int $productId)
    {
        $this->productId = $productId;
    }

    public function submit()
    {
        //dd($this->fields);
        if (isset($this->fields) && is_array($this->fields)) {

            $review = new Review();
            $review->name = $this->fields['nom'];
            $review->email = $this->fields['email'];
            $review->content = $this->fields['content'];
            $review->product_id = $this->productId;
            $review->save();

            return redirect()->back();
        }
        return redirect()->back();
    }

    public function update()
    {
        // dd($this->fields);
    }
}
