<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateElement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'attribute',
        'active',
        'order_no',
        'max_num',
        'arrangeable',
        'editable',
        'value',
        'template',
        'parent',
    ];
}
