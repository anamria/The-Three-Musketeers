<?php

namespace App\Http\Controllers\backend;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class Materi1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $data = Materi::paginate(1);
        
        return view('backend.Materi.materi1', ['data'=>$data]);
    }

}
