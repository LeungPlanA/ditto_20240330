<?php

namespace App\Traits;

use App\Models\Element;
use App\Models\TemplateElement;
use App\Models\MenuItem;

trait ChildTrait
{
    public function getChild($page_id, $parent_id)
    {
        $elements = Element::select('elements.*', 'templates.path', 'element_translations.value')
        ->leftJoin('templates', 'elements.template_id', '=', 'templates.id')
        ->join('element_translations', 'element_translations.element_id', '=', 'elements.id')
        ->where('elements.page_id', $page_id)
        ->where('elements.parent_id', $parent_id)
        ->where('element_translations.lang_id', 1)
        ->get();

        foreach ($elements as $element) {
            $elementChild = $this->getChild($page_id, $element->id);
            $element->child = $elementChild;
        }

        $mergedResults = collect($elements)->sortBy('order_no')->values()->all();

        return $mergedResults;
    }

    public function getTemplateChild($template_id, $parent_id)
    {
        $templateElements = TemplateElement::where('template', $template_id)->where('parent', $parent_id)->get();
        foreach ($templateElements as $templateElement) {
            $templateElementChild = $this->getTemplateChild($template_id, $templateElement->id);
            $templateElement->child = $templateElementChild;
        }

        $mergedResults = collect($templateElements)->sortBy('order_no')->values()->all();

        return $mergedResults;
    }

    public function getMenuChild($menu_id, $parent_id)
    {
        $menuItems = MenuItem::select('menu_items.*', 'menu_item_translations.name')
        ->leftJoin('menu_item_translations', 'menu_item_translations.menu_item_id', '=', 'menu_items.id')
        ->where('menu_items.menu_id', $menu_id)
        ->where('menu_items.parent_id', $parent_id)
        ->where('menu_items.active', 1)
        ->where('menu_item_translations.lang', 1)
        ->get();

        // $menuItems = MenuItem::where('menu_id', $menu_id)->where('parent_id', $parent_id)->where('active', 1)->get();
        foreach ($menuItems as $menuItem) {
            $menuItemChild = $this->getMenuChild($menu_id, $menuItem->id);
            $menuItem->child = $menuItemChild;
        }

        $mergedResults = collect($menuItems) -> sortBy('order_no')->values()->all();

        return $mergedResults;
    }
}