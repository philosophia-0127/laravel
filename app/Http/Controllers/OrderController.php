<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

    // 作成したメールクラスをuseする
use App\Mail\CotactMail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * 入力画面
     */
    public function input()
    {
        return view('orders.input');
    }

    /**
     * 確認画面
     */
    public function confirm(Request $request)
    {
        $contact = new ContactForm;

        $contact->last_name = $request->input('last_name');
        $contact->first_name = $request->input('first_name');
        $contact->email = $request->input('email');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');

        $contact->save();

        return redirect('/');
    }

    /**
     * 完了画面
     */
    public function finish(Request $request)
    {
        // 全入力データをcontact変数に代入
        // 配列として受け取りたい場合は $contact = $request->all();
        $contact = $request;

        // 引数にリクエストデータを渡す
        // Mailファサードを使ってメールを送信
        Mail::to($contact->email)->send(new ContactMail($contact));

        // Bladeで使う変数
        $hash = array(
            'title' => 'お問い合わせ',
            'subtitle' => '完了画面',
        );

        return view('orders.finish')->with($hash);
    }

}
