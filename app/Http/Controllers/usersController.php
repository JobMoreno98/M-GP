<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    public function index(){
        // Select from global_politics.users
        $query = 'SELECT * FROM GLOBAL_POLITICS.USUARIOS;';
        $users = DB::select($query);
        
        $results = DB::table('uses')->where('CORREO', 'correo1@academicos.com',)->value('');
        
        dd($users);
    }
}
