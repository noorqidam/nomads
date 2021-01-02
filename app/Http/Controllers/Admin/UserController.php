<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $items = User::get();
        return view('pages.admin.navbar', [
            'items' => $items
        ]);
    }
}
