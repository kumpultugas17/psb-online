<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class PendaftarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dashboard Calon Siswa';
        $id =  Auth::user()->id;
        $user = DB::table('users')->where('id', $id)->first();
        $biodata = DB::table('biodata')->where('user_id', $id)->first();

        return view('pendaftar', compact('title', 'user', 'biodata'));
    }
}