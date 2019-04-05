<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $data = [
            [ 'name' => 'Item 1' ],
            [ 'name' => 'Item 2' ],
            [ 'name' => 'Item 3' ],
            [ 'name' => 'Item 4' ],
        ];

        return view('item', ['items' => $data]);
    }
}
