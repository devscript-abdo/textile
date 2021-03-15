<?php

namespace App\Http\Seo;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Facades\SEOMeta;

abstract class SeoHandler
{
    use  SEOToolsTrait;

    public function seoMeta()
    {
        return new SEOMeta();
    }
}
