<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'slide_heading',
        'slide_paragraph',
        'slide_image',
        'created_by',
        'updated_by'
    ];

    protected function slideImage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/sliders/' . $value),
        );
    }
}
