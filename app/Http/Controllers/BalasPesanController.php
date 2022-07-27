<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BalasPesanController extends Controller
{
    public function index(Request $req, $id){
        DB::table('comments')->insert([
            'komen' => $req->balas,
            'id_users' => $id
        ]);
        return redirect('/secrebew');
    }
}
