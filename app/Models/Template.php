<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TemplateElement;
use App\Traits\ChildTrait;

class Template extends Model
{
    use HasFactory;
    use ChildTrait;

    protected $fillable = [
        'name',
        'active',
        'order_no',
        'path',
    ];

    public function getTemplatesWithTranslations()
    {
        $templates = $this->select('templates.*', 'template_translations.title')
        ->join('template_translations', 'template_translations.template_id', '=', 'templates.id')
        ->where('templates.active', 1)
        ->where('template_translations.lang_id', 1)
        ->get();

        //$templates = Template::all();
        foreach ($templates as $template) {
            $templateElements = $this->getTemplateChild($template->id, NULL);
            $template->child = $templateElements;
        }

        return $templates;
    }
}
