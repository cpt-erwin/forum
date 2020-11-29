<?php

namespace TuMiSoft\Forum\Controllers;

use TuMiSoft\Forum\Models\Category;

class CategoryController extends Controller
{
    public function __invoke()
    {
        return json_encode(['categories' => Category::getAll()]);
    }
}