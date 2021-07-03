<x-layout>
    <div class="container">
        <div class="col-10 mx-auto">


            <form method="post" action="{{ route('orders.confirm') }}">
                @csrf

                    <!--氏名-->
                    <div class="form-group col-md-6 mb-3">
                        <label for="lastName">名字</label>
                        <input type="text" name="last_name" class="form-control" placeholder="名字">
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="firstName">名前</label>
                        <input type="text" name="first_name" class="form-control" placeholder="名前">
                    </div>
                    <!--/氏名-->

                    <!--Eメール-->
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputEmail" class="col-form-label">Eメール</label>
                        <input type="email" name="email" class="form-control" placeholder="Eメール">
                    </div>
                    <!--/Eメール-->

                    <!--性別-->
                    <div class="form-group col-md-6 my-5">
                        性別
                        <input type="radio" name="gender" value="0">男性
                        <input type="radio" name="gender" value="1">女性
                    </div>
                    <!--/性別-->

                    <!--年齢-->
                    <div class="form-group col-md-6 my-5">
                        年齢
                        <select name="age">
                            <option value="">選択してください</option>
                            <option value="1">～19歳</option>
                            <option value="2">20歳～29歳</option>
                            <option value="3">30歳～39歳</option>
                            <option value="4">40歳～49歳</option>
                            <option value="5">50歳～59歳</option>
                            <option value="6">60歳～</option>
                        </select>
                    </div>
                    <!--/年齢-->

                    <!--備考欄-->
                    <div class="form-group col-md-6 mb-3">
                        <label for="Textarea">お問い合わせ内容</label>
                        <textarea name="contact" class="form-control" rows="3" placeholder="その他、質問などありましたら"></textarea>
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
