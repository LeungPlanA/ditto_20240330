<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Traits\ChildTrait;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class PageController extends Controller
{
    use ChildTrait;

    public function getPageDetail($url){
        $page = DB::table('pages as a')
        ->select('a.*', 'b.name')
        ->join('page_translations as b', 'a.id', '=', 'b.page_id')
        ->where('b.lang_id', 1)
        ->where('a.active', 1)
        ->where('a.url_name', $url)
        ->first();

        if (!$page) {
            return view('errors.page_not_found', ['url' => $url]);
        }
        
        $elements = $this->getChild($page->id, NULL);
        $page->child = $elements;
        $page->attribute = json_decode($page->attribute);

        $menus = Menu::get();
        $page->menus = $menus;

        foreach ($menus as $menu) {
            $menuItems = $this->getMenuChild($menu->id, NULL);
            $menu->child = $menuItems;
        }
        
        return $page;
    }

    public function getPageByUrl($url)
    {
        $page = $this->getPageDetail($url);
        return view('application', ['page' => $page]);
    }
}
