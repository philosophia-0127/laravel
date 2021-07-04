<x-layout>
    <div class="container">
        <div class="col-10 mx-auto">


            <form method="post" action="{{ route('orders.confirm') }}">
                {{-- @method('POST') --}}
                @csrf

                    <!--氏名-->
                    <div class="form-group col-md-6 mb-3">
                        <label for="lastName">名字</label>
                        <input type="text" name="last_name" class="form-control" placeholder="名字" value="{{ old('last_name') }}">

                        @error('last_name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="firstName">名前</label>
                        <input type="text" name="first_name" class="form-control" placeholder="名前" value="{{ old('first_name') }}">

                        @error('first_name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <!--/氏名-->

                    <!--Eメール-->
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputEmail" class="col-form-label">Eメール</label>
                        <input type="email" name="email" class="form-control" placeholder="Eメール" value="{{ old('email') }}">

                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <!--/Eメール-->

                    <!--性別-->
                    <div class="form-group col-md-6 my-5">
                        性別
                        <input type="radio" name="gender" value="0" @if(old('gender') === "0") checked @endif>男性
                        <input type="radio" name="gender" value="1" @if(old('gender') === "1") checked @endif>女性

                        @error('gender')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <!--/性別-->

                    <!--年齢-->
                    <div class="form-group col-md-6 my-5">
                        年齢
                        <select name="age">
                            <option value="" @if(old('age') === "") selected @endif>選択してください</option>
                            <option value="1" @if(old('age') === "1") selected @endif>～19歳</option>
                            <option value="2" @if(old('age') === "2") selected @endif>20歳～29歳</option>
                            <option value="3" @if(old('age') === "3") selected @endif>30歳～39歳</option>
                            <option value="4" @if(old('age') === "4") selected @endif>40歳～49歳</option>
                            <option value="5" @if(old('age') === "5") selected @endif>50歳～59歳</option>
                            <option value="6" @if(old('age') === "6") selected @endif>60歳～</option>
                        </select>

                        @error('age')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror


                    </div>
                    <!--/年齢-->

                    <!--備考欄-->
                    <div class="form-group col-md-6 mb-3">
                        <label for="Textarea">お問い合わせ内容</label>
                        <textarea name="contact" class="form-control" rows="3" placeholder="その他、質問などありましたら">{{ old('contact') }}</textarea>
                    </div>
                    <!--/備考欄-->

                    <!--ボタンブロック-->
                    <div class="form-group">
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary px-4 mt-2">確認</button>
                        </div>
                    </div>
                    <!--/ボタンブロック-->

            </form>


        </div>
    </div>
</x-layout>
