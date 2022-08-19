<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPre()
    {
        return view('dashboard.user.userPremium.index',[
            'users'=>User::all()
        ]);
    }

    public function indexReg()
    {
        return view('dashboard.user.userReguler.index',[
            'users'=>User::all()
        ]);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPre($id)
    {
        User::destroy($id);

        return redirect('/admin/user/user-reguler')->with('success', 'Post has been deleted!');
    }

    public function destroyReg($id)
    {
        User::destroy($id);

        return redirect('/admin/user/user-reguler')->with('success', 'Post has been deleted!');
    }
}
