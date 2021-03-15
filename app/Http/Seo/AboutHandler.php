<?php

namespace App\Http\Seo;

use TCG\Voyager\Facades\Voyager;

class AboutHandler extends SeoHandler
{

    public function all()
    {

        $this->seo()->setTitle(setting('site.title'));
        $this->seo()->setDescription(setting('site.description'));

        $this->seo()->opengraph()->setTitle(setting('site.title'));
        $this->seo()->opengraph()->setDescription(setting('site.description'));
        $this->seo()->opengraph()->setUrl(request()->getUri());
        $this->seo()->opengraph()->setSiteName('Haymac Production About');
        $this->seo()->opengraph()->addProperty('type', 'website');
        $this->seo()->opengraph()->addProperty('locale', 'fr_FR');
        $this->seo()->opengraph()->addImage(Voyager::image(setting('seo.facebook_og_image')), ['height' => 300, 'width' => 300]);
        // $this->seo()->twitter()->setSite('@LuizVinicius73');
        $this->seo()->jsonLd()->setType('WebPage');
    }
}
