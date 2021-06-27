<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function top()
    {

        $posts = [
            'TitleA',
            'TitleB',
            'TitleC',
        ];

        return view('top')
            ->with(['posts' => $posts]);
    }
}
