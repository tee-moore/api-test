<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Http\Requests\ActorFormRequest;
use App\Http\Resources\ActorResource;
use App\Http\Resources\ActorResourceCollection;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ActorResourceCollection
     */
    public function index()
    {
        return new ActorResourceCollection(Actor::paginate(12));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ActorFormRequest  $request
     * @return ActorResource
     */
    public function store(ActorFormRequest $request)
    {
        return new ActorResource(
            Actor::create($request->validated())
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  Actor $actor
     * @return ActorResource
     */
    public function show(Actor $actor)
    {
        return new ActorResource($actor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ActorFormRequest  $request
     * @param  Actor $actor
     * @return ActorResource
     */
    public function update(ActorFormRequest $request, Actor $actor)
    {
        $actor->update($request->validated());
        return new ActorResource($actor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Actor $actor
     * @return ActorResource
     */
    public function destroy(Actor $actor)
    {
        $actor->delete();
        return response()->json(null, 204);
    }
}
