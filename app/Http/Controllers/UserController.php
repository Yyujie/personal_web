<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * 显示所有应用程序用户的列表
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::select('select * from im_users');
        $user=json_decode( json_encode( $users),true);
        return view('user', ['user' => $user]);
    }
}
