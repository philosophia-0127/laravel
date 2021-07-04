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
            'gender' => 'required',
            'age' => 'required',
        ]);


        $contact = new ContactForm;

        $contact->last_name = $request->input('last_name');
        $contact->first_name = $request->input('first_name');
        $contact->email = $request->input('email');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');

        $contact->save();

        return redirect()
            ->route('orders.finish');     #redirect先不明
    }

    // 完了画面 //
    public function finish(Request $request)
    {
        // Mailファサードを使ってメールを送信
        // Mail::to($contact->email)->send(new ContactMail($contact));

        return view('orders.finish');
    }

}
