<?php

namespace App\Http\Seo;

use App\Repository\Project\ProjectInterface;
use TCG\Voyager\Facades\Voyager;

class PortfolioHandler extends SeoHandler
{

    public function all()
    {

        $this->seo()->setTitle(setting('site.title'));
        $this->seo()->setDescription(setting('site.description'));

        $this->seo()->opengraph()->setTitle(setting('site.title'));
        $this->seo()->opengraph()->setDescription(setting('site.description'));
        $this->seo()->opengraph()->setUrl(request()->getUri());
        $this->seo()->opengraph()->setSiteName('Haymac Production Portfolio');
        $this->seo()->opengraph()->addProperty('type', 'website');
        $this->seo()->opengraph()->addProperty('locale', 'fr_FR');
        $this->seo()->opengraph()->addImage(Voyager::image(setting('seo.facebook_og_image')), ['height' => 300, 'width' => 300]);
        // $this->seo()->twitter()->setSite('@LuizVinicius73');
        $this->seo()->jsonLd()->setType('WebPage');
    }

    public function single($project)
    {
        $data = app(ProjectInterface::class)->getProject($project);

        $tags = $data->tags->pluck(['name'])->implode(', ');

        $this->seo()->setTitle($data->seo_title);
        $this->seo()->setDescription($data->seo_description);

        $this->seo()->opengraph()->setTitle($data->seo_title);
        $this->seo()->opengraph()->setDescription($data->seo_description);
        $this->seo()->opengraph()->setUrl(request()->getUri());
        $this->seo()->opengraph()->addProperty('type', 'article');
        $this->seo()->opengraph()->addProperty('locale', 'fr_FR');
        $this->seo()->opengraph()->addImage($data->first_photo, ['height' => 300, 'width' => 300]);
        $this->seoMeta()::addMeta('article:published_time', $data->created_at->toW3CString(), 'property');
        $this->seoMeta()::addMeta('article:modified_time', $data->updated_at->toW3CString(), 'property');
        $this->seoMeta()::addMeta('article:section', $data->category->name ?? 'portfolio', 'property');
        $this->seoMeta()::addMeta('article:tag', $tags, 'property');
        $this->seoMeta()::addMeta('article:author', 'Haymacproduction', 'property');
        $this->seoMeta()::addKeyword([$data->seo_keywords]);

        $this->seo()->jsonLd()->setType('Article');
        $this->seo()->jsonLd()->setTitle('Protfolio ' . $data->seo_title);
        $this->seo()->jsonLd()->setDescription($data->seo_description);
        $this->seo()->jsonLd()->addImage($data->first_photo);
    }
}
