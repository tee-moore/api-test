<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Http\Requests\MovieFormRequest;
use App\Http\Resources\MovieResource;
use App\Http\Resources\MovieResourceCollection;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return MovieResourceCollection
     */
    public function index()
    {
        return new MovieResourceCollection(Movie::with('actors')
            ->paginate(12));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\MovieFormRequest $request
     * @return MovieResource
     */
    public function store(MovieFormRequest $request)
    {
        $movie = Movie::create($request->validated());
        $movie->actors()->attach($request->get('actors'));

        return new MovieResource(
            $movie
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Movie $movie
     * @return MovieResource
     */
    public function show(Movie $movie)
    {
        return new MovieResource($movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\MovieFormRequest $request
     * @param \App\Movie $movie
     * @return MovieResource
     */
    public function update(MovieFormRequest $request, Movie $movie)
    {
        if ($request->user()->id !== $movie->user_id) {
            return response()->json(['error' => 'You can only edit your own movie.'], 403);
        }

        $movie->update($request->validated());
        $movie->actors()->sync($request->get('actors'));

        return new MovieResource($movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(MovieFormRequest $request, Movie $movie)
    {
        if ($request->user()->id !== $movie->user_id) {
            return response()->json(['error' => 'You can only delete your own movie.'], 403);
        }

        $movie->actors()->detach();
        $movie->delete();
        return response()->json(null, 204);
    }

    public function search(Request $request)
    {
        $s     = $request->get('s');
        $by    = $request->get('by');
        $movie = Movie::with('actors');

        switch ($by) {
            case 'movie':
                $movie->where('name', 'LIKE', '%' . $s . '%');
                break;

            case 'actor':
                $movie->whereHas('actors', function ($q) use ($s)
                {
                    $q->where('name', 'LIKE', '%' . $s . '%');
                });
                break;
            default:
                return response()->json(['error' => 'Wrong parameter.'], 404);
        }

        return new MovieResourceCollection($movie->paginate(12));
    }
}
