<?php

namespace Zhibaihe\Forum\Http\Controllers\Admin;

use Zhibaihe\Forum\Http\Controllers\Controller;

class ForumsController extends Controller
{
    public function index()
    {
        return view('zhibaihe.forum::admin.forums.index', [
        ]);
    }
}