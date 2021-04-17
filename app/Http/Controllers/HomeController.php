<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $level = Auth::user()->level;
        switch ($level) {
            case '0':
                return redirect()->action('AdminController@index');
                break;
            case '1':
                return redirect()->action('PendaftarController@index');
                break;
            default:
                echo "PSB Online!";
                break;
        }
    }
}