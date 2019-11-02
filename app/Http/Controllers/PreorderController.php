<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePreorder;
use App\Preorder;

class PreorderController extends Controller
{
    public function store(StorePreorder $request)
    {
        Preorder::create($request->validated());
    }
}
