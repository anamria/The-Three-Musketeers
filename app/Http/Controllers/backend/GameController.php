<?php

namespace App\Http\Controllers\backend;

namespace App\Http\Controllers\backend;

use App\Models\Materi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Lpgame(Request $request)
    {
        return view('backend.Game.lpgame');
    }

    public function Gamedd(Request $request)
    {
        return view('backend.Game.gamedandd');
    }

    public function Gametts(Request $request)
    {
        return view('backend.Game.gametts');
    }
}
