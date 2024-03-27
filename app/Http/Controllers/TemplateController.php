<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Template;
use App\Http\Resources\V1\TemplateResource;
use App\Http\Controllers\Api\V1\ApiResponse;
use App\Traits\ChildTrait;
use App\Models\TemplateElement;
use App\Http\Requests\V1\StoreTemplateRequest;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    use ChildTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $templates = Template::select('templates.*', 'template_translations.title')
            ->join('template_translations', 'template_translations.template', '=', 'templates.id')
            ->where('templates.active', 1)
            ->where('template_translations.lang', 1)
            ->get();

            //$templates = Template::all();
            foreach ($templates as $template) {
                $templateElements = $this->getTemplateChild($template->id, NULL);
                $template->child = $templateElements;
            }
            return ApiResponse::success(TemplateResource::collection($templates), 'Successfully fetch records', 200);
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
    public function store(Request $request)
    {
        try {
            $template = Template::create([
                'name' => $request['name'],
                'path' => $request['path'],
                'active' => $request['active'],
                'order_no' => $request['order_no'],
            ]);
        
            if (!empty($request['child'])) {
                $this->createTemplateElements($request['child'], $template->id, null);
            }
        
            return ApiResponse::success(null, 'Successfully create records', 200);
        } catch (QueryException $e) {
            return ApiResponse::error('Index operation failed: ' . $e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Template $template)
    {
        //
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

    private function createTemplateElements($elements, $templateId, $parentId)
    {
        foreach ($elements as $element) {
            $newElement = TemplateElement::create([
                'name' => $element['name'],
                'type' => $element['type'],
                'attribute' => $element['attribute'],
                'active' => $element['active'],
                'order_no' => $element['order_no'],
                'max_num' => $element['max_num'],
                'arrangeable' => $element['arrangeable'],
                'editable' => $element['editable'],
                'template' => $templateId,
                'parent' => $parentId,
            ]);

            if (!empty($element['child'])) {
                $this->createTemplateElements($element['child'], $templateId, $newElement->id);
            }
        }
    }
}
