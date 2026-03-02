<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasSeo
{
    public function getSeoTitle(): string
    {
        return $this->getTranslation('meta_title', app()->getLocale()) ?: $this->getTranslation('title', app()->getLocale());
    }

    public function getSeoDescription(): string
    {
        return $this->getTranslation('meta_description', app()->getLocale()) ?: $this->getTranslation('brief', app()->getLocale());
    }
}
