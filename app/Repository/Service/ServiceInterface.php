<?php

namespace App\Repository\Service;

interface ServiceInterface 
{

    
	public function all();

	public function query();

    public function activeItems();

	public function homeItems();
	// more
}
