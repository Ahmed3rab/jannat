<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Type extends Model
{
    use HasTranslations;

    protected $guarded = ['id'];

    public array $translatable = ['name'];
}
