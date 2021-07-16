<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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

        if ($request->has('avatar')) {
            $fileName = $this->saveAvatar($request->file('avatar'));
            $user->profile_image_id = $fileName;
        }

        $user->save();
        return redirect()->back()
             ->with('status', 'プロフィールを変更しました。');
    }

    private function saveAvatar(UploadedFile $file): string
    {
        $tempPath = $this->makeTempPath();

        Image::make($file)->fit(200, 200)->save($tempPath);

        $filePath = Storage::disk('public')
            ->putFile('avatars', new File($tempPath));
            // putFileメソッドで画像を保存

        return basename($filePath);
    }

    private function makeTempPath(): string
    {
        $tmp_fp = tmpfile();
        $meta   = stream_get_meta_data($tmp_fp);
        return $meta["uri"];
    }
}
