<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // Bladeで使う変数
        $hash = array(
            'title' => 'お問い合わせ',
            'subtitle' => '入力画面',
        );
        return view('orders.input')->with($hash);
    }

    /**
     * 確認画面
     */
    public function confirm(Request $request)
    {
        // Bladeで使う変数
        $hash = array(
            'request' => $request,
            'title' => 'お問い合わせ',
            'subtitle' => '確認画面',
        );
        return view('orders.confirm')->with($hash);
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
