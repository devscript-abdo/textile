<?php

namespace App\Http\Seo;

use App\Repository\Post\PostInterface;
use TCG\Voyager\Facades\Voyager;

class BlogHandler extends SeoHandler
{

    public function all()
    {

        $this->seo()->setTitle(setting('site.title'));
        $this->seo()->setDescription(setting('site.description'));

        $this->seo()->opengraph()->setTitle(setting('site.title'));
        $this->seo()->opengraph()->setDescription(setting('site.description'));
        $this->seo()->opengraph()->setUrl(request()->getUri());
        $this->seo()->opengraph()->setSiteName('Haymac Production BlogHandler');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->opengraph()->addProperty('locale', 'fr_FR');
        $this->seo()->opengraph()->addImage(Voyager::image(setting('seo.facebook_og_image')), ['height' => 300, 'width' => 300]);
        $this->seoMeta()::addKeyword([setting('site.keywords')]);
        //$this->seo()->setCanonical(route('blog'));
        $this->seo()->twitter()->setSite('@haymacprod2');
        $this->seo()->twitter()->setTitle(setting('site.title'));
        
        $this->seo()->jsonLd()->setType('WebPage');
        $this->seo()->jsonLd()->setTitle('Blog');
        $this->seo()->jsonLd()->setDescription(setting('site.description'));
        $this->seo()->jsonLd()->addImage(Voyager::image(setting('seo.facebook_og_image')));
    }


    public function single($post)
    {
        $data = app(PostInterface::class)->getPost($post, ['category', 'tags']);

        $tags = $data->tags->pluck(['name'])->implode(', ');

        $this->seo()->setTitle($data->seo_title);
        $this->seo()->setDescription($data->meta_description);

        $this->seo()->opengraph()->setTitle($data->seo_title);
        $this->seo()->opengraph()->setDescription($data->meta_description);
        $this->seo()->opengraph()->setUrl(request()->getUri());
        $this->seo()->opengraph()->addProperty('type', 'article');
        $this->seo()->opengraph()->addProperty('locale', 'fr_FR');
        $this->seo()->opengraph()->addImage($data->photo, ['height' => 300, 'width' => 300]);
        $this->seoMeta()::addMeta('article:published_time', $data->created_at->toW3CString(), 'property');
        $this->seoMeta()::addMeta('article:modified_time', $data->updated_at->toW3CString(), 'property');
        $this->seoMeta()::addMeta('article:section', $data->category->name, 'property');
        $this->seoMeta()::addMeta('article:tag', $tags, 'property');
        $this->seoMeta()::addMeta('article:author', 'Haymacproduction', 'property');
        $this->seoMeta()::addKeyword([$data->meta_keywords]);
       // $this->seo()->setCanonical(route('blog.single', $data->slug));

        $this->seo()->jsonLd()->setType('Article');
        $this->seo()->jsonLd()->setTitle('Blog ' . $data->seo_title);
        $this->seo()->jsonLd()->setDescription($data->meta_description);
        $this->seo()->jsonLd()->addImage($data->photo);
    }
}
