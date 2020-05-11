<?php

namespace Platform\Test\Controllers;

use App\Framework\Http\Controller;

class TestController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function test()
    {
        return 'test';
    }

    public function admin()
    {
        return view('test::panel');
    }
}
