<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'     => $this->id,
            'name'   => $this->name,
            'year'   => $this->year,
            'format' => new FormatResource($this->format),
            'author' => $this->user_id,
            'actors' => ActorResource::collection($this->actors)
        ];
    }

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function with($request)
    {
        if ($request->isMethod('delete')) {
            return [];
        }

        return [
            'meta' => [
                "path" => route('movies.show', $this->id),
            ],
        ];
    }
}

