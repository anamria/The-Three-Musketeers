<?php

namespace App\Http\Controllers\backend;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

            
    public function index(Request $request)
    {
        $list = DB::table('skorquiz')->get();
        return view('backend.Kuis.lb',compact('list'));
    }

    // public function index()
    // {
    //     $data['skorquiz'] = DB::select('SELECT * FROM skorquiz');
    //     return view('lb', $data);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function exportPDF(){
        $data = DB::table("skorquiz")->get();
        $pdf = PDF::loadView('export', compact('data'));
        return $pdf->download('leaderboard.pdf');
    }
}
