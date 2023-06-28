<?php

namespace App\Http\Controllers\backend;

use App\Models\Materi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriSatuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Materi::where('id_materi', 1)->paginate(1);

        return view('backend.Materi.materisatu', compact('items'));
    }

}
