<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        return view('users.edit')
            ->with('user', Auth::user());  //6行目でAuthファサード引用
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->save();
        return redirect()->back()
             ->with('status', 'プロフィールを変更しました。');
    }
}
