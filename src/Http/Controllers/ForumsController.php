<?php

namespace Zhibaihe\Forum\Http\Controllers;

class ForumsController extends Controller
{
    public function index()
    {
        return view('zhibaihe.forum::forums.index', [
            'message' => 'Hello, Zhibaihe! ' . config('zhibaihe.forum.main.package')
        ]);
    }
}