<x-layout>
    <div class="container">
        <div class="col-10 mx-auto">

            <form method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!--名字-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">名字</label>
                    {{ $contact->last_name }}
                    <input type="hidden" name="last_name" value="{{ $contact->last_name }}" />
                </div>
                <!--/名字-->

                <!--名前-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">名前</label>
                    {{ $contact->first_name }}
                    <input type="hidden" name="first_name" value="{{ $contact->first_name }}" />
                </div>
                <!--/名前-->

                <!--Eメール-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Eメール</label>
                    {{ $contact->email }}
                    <input type="hidden" name="email" value="{{ $contact->email }}" />
                </div>
                <!--/Eメール-->

                <!--性別-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">性別</label>
                    {{ $contact->gender }}
                    <input type="hidden" name="gender" value="{{ $contact->gender }}" />
                </div>
                <!--/性別-->

                <!--年齢-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">性別</label>
                    {{ $contact->age }}
                    <input type="hidden" name="age" value="{{ $contact->age }}" />
                </div>
                <!--/年齢-->

                <!--備考欄-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">お問い合わせ内容</label>
                    {{ $contact->contact }}
                    <input type="hidden" name="contact" value="{{ $contact->contact }}" />
                </div>
                <!--/備考欄-->


                <!--ボタンブロック-->
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block">送信</button>
                    </div>
                </div>
                <!--/ボタンブロック-->

            </form>


        </div>
    </div>
</x-layout>
