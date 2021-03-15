<?php

namespace App\Http\Livewire\Search;

use App\Services\SearchService;
use Livewire\Component;

class Search extends Component
{

    public $query;

    public $results;

    protected $rules = ['query' => 'required|string'];

    protected $messages = [
        'query.required'=>'tapez ce que vous voulez trouvé'
    ];
    public function render()
    {
        return view('livewire.search.search', ['results' => $this->results]);
    }

    public function submit(SearchService $service)
    {
        $this->validate();

        $this->results = $service->execute('runSearcher', $this->query);
    }
}
