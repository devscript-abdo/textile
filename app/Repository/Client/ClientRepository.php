<?php

namespace App\Repository\Client;

use App\Models\Client;

class ClientRepository  implements ClientInterface
{

    protected $model;

    public function __construct(Client $model)
    {

        $this->model = $model;
    }


    public function query()
    {
        return $this->model->query();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function activeItems()
    {
        return $this->model->active();
    }

}
