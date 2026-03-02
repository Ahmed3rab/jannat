<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasSeo
{
    public function getSeoTitle(): string
    {
        return $this->meta_title ?? $this->title;
    }

    public function getSeoDescription(): string
    {
        return $this->meta_description ?? Str::limit(strip_tags($this->brief), 160);
    }
}
