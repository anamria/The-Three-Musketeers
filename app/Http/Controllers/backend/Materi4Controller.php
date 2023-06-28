<?php

namespace App\Http\Controllers\backend;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class Materi4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Materi::where('id_materi', 4)->paginate(1);

        return view('backend.Materi.materi4', compact('items'));
    }
}
