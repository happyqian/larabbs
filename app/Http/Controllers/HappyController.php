<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Access\Gate;
class HappyController extends Controller
{
    public function index()
    {
        $gate = app(Gate::class);
        dump(get_class($gate));
    }
}
