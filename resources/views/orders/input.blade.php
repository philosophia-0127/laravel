<x-layout>
    <div class="container">
        <div class="col-10 mx-auto">


            <form method="post">
                @method('PUT')

                {{ method_field('patch') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!--氏名-->
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="lastName">名字</label>
                            <input type="text" name="last_name" class="form-control" id="lastName" placeholder="名字" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">名前</label>
                            <input type="text" name="first_name" class="form-control" id="firstName" placeholder="名前" required>
                        </div>
                    </div>
                    <!--/氏名-->

                    <!--Eメール-->
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Eメール</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Eメール" required>
                        </div>
                    </div>
                    <!--/Eメール-->

                    <!--備考欄-->
                    <div class="form-group mb-3">
                        <label for="Textarea">お問い合わせ内容</label>
                        <textarea class="form-control" name="note" id="Textarea" rows="3" placeholder="その他、質問などありましたら" required></textarea>
                    </div>
                    <!--/備考欄-->

                    <!--ボタンブロック-->
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block">確認</button>
                        </div>
                    </div>
                    <!--/ボタンブロック-->

            </form>


        </div>
    </div>
</x-layout>
