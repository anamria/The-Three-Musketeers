<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $list = DB::table('soalquiz')->get();
        return view('backend.Kuis.kuis',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Kuis.kuis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $skorInput = $request->input('skorInput');
        $skorInput = $request->skorInput;
        $namaInput = $request->namaInput;
        // dd($request->input('));
        $query = DB::table('skorquiz')->insert([
                   'skor' => $skorInput,
                   'nama' => $namaInput
        ]);
        if ($query) {
                   return redirect()->route('kuis.index')->with('success', 'Data Berhasil Ditambahkan');
        } else {
                   return redirect()->route('kuis.index')->with('failed', 'Data Gagal Ditambahkan');
        }
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
}
