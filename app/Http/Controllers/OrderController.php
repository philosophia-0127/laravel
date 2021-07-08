<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // 入力画面 //
    public function input()
    {
        return view('orders.input');
    }

    // 確認画面 //
    public function confirm(Request $request)
    {
        $request->validate([
            'last_name' => 'required|min:2',
            'first_name' => 'required|min:2',
            'email' => 'required',
            'gender' => 'required',
            'age' => 'required',
        ], [
            'last_name.required' => '名字は入力必須です',
            'last_name.min' => ':min 文字以上入力してください',
            'first_name.required' => '名前は入力必須です',
            'first_name.min' => ':min 文字以上入力してください',

            'email.required' => 'Eメールは入力必須です',
            'gender.required' => '当てはまる性別を入力してください',
            'age.required' => '当てはまる年齢を入力してください',
        ]);


        $contact = new ContactForm();

        $contact->last_name = $request->input('last_name');
        $contact->first_name = $request->input('first_name');
        $contact->email = $request->input('email');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');

        $contact->save();

        return view('orders.confirm')
            ->with(['contact' => $contact]);
    }



    // パラメーター貯蔵 //
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'last_name' => 'required|min:2',
    //         'first_name' => 'required|min:2',
    //         'email' => 'required',
    //         'gender' => 'required',
    //         'age' => 'required',
    //     ], [
    //         'last_name.required' => '名字は入力必須です',
    //         'last_name.min' => ':min 文字以上入力してください',
    //         'first_name.required' => '名前は入力必須です',
    //         'first_name.min' => ':min 文字以上入力してください',

    //         'email.required' => 'Eメールは入力必須です',
    //         'gender.required' => '当てはまる性別を入力してください',
    //         'age.required' => '当てはまる年齢を入力してください',
    //     ]);


    //     $contact = new ContactForm;

    //     $contact->last_name = $request->input('last_name');
    //     $contact->first_name = $request->input('first_name');
    //     $contact->email = $request->input('email');
    //     $contact->gender = $request->input('gender');
    //     $contact->age = $request->input('age');
    //     $contact->contact = $request->input('contact');

    //     $contact->save();

    //     return redirect()
    //         ->route('orders.finish');

    // }


    // 完了画面 //
    public function finish(Request $request)
    {
        // Mailファサードを使ってメールを送信
        // Mail::to($contact->email)->send(new ContactMail($contact));

        return view('orders.finish');
    }
}
