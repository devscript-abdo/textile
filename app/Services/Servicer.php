<?php

namespace App\Services;

use App\Exceptions\FunctionNotFoundException;

abstract class Servicer
{


    public function run()
    {
    }

    public function execute(string $method, $data)
    {

        if (method_exists($this, $method)) {
            return $this->$method($data);
        }
        return new FunctionNotFoundException("sorry the method : {$method}  not found");
    }
}
