<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function akunpenggunaadd()
    {
      return view('pengguna/register');
    }
    
       
    public function akunpenggunapost(Request $req)
        {
        $id = $req->get('id');
        if($id){
            $akun = User::find($id);
        }else{
            $akun = new User;
        }
        $akun->name = $req->name;
        $akun->email = $req->email;
        $akun->password = bcrypt($req->password);
        $akun->level = $req->level;
        $akun->save();

      return redirect()->route('pengguna/register');
    }
}
