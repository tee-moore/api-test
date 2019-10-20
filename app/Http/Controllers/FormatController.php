<?php

namespace App\Http\Controllers;

use App\Format;
use App\Http\Requests\FormatFormRequest;
use App\Http\Resources\FormatResource;
use App\Http\Resources\FormatResourceCollection;

class FormatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return FormatResourceCollection
     */
    public function index()
    {
        return new FormatResourceCollection(Format::paginate(12));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\FormatFormRequest $request
     * @return FormatResource
     */
    public function store(FormatFormRequest $request)
    {
        return new FormatResource(
            Format::create($request->validated())
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Format $format
     * @return FormatResource
     */
    public function show(Format $format)
    {
        return new FormatResource($format);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Format $format
     * @return FormatResource
     */
    public function update(FormatFormRequest $request, Format $format)
    {
        $format->update($request->validated());
        return new FormatResource($format);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Format $format
     *
     */
    public function destroy(Format $format)
    {
        $format->delete();
        return response()->json(null, 204);
    }
}
