<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articlesController extends Controller
{
    public function artikel($id)
    {
        return 'Halaman Artikel Ke-'.$id;
    }
}