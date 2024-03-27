<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Page;
use App\Http\Controllers\Api\V1\ApiResponse;
//use App\Traits\ChildTrait;

class PageController extends Controller
{
    //use ChildTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $pages = Page::all();
            return ApiResponse::success($pages, 'Successfully fetch records', 200);
        } catch (QueryException $e) {
            return ApiResponse::error('Index operation failed: ' . $e->getMessage(), 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        $elements = $this->getChild($page->id, NULL);
        $page->child = $elements;
        try {
            return ApiResponse::success(new PageResource($page), 'Successfully fetch record', 200);
        } catch (QueryException $e) {
            return ApiResponse::error('Show operation failed: ' . $e->getMessage(), 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
