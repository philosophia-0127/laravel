<x-layout>
    <div class="container">
        <div class="col-10 mx-auto">

            <form method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!--名字-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">名字</label>
                    {{ $request->last_name }}
                    <input type="hidden" name="last_name" value="{{ $request->last_name }}" />
                </div>
                <!--/名字-->

                <!--名前-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">名前</label>
                    {{ $request->first_name }}
                    <input type="hidden" name="first_name" value="{{ $request->first_name }}" />
                </div>
                <!--/名前-->

                <!--Eメール-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Eメール</label>
                    {{ $request->email }}
                    <input type="hidden" name="email" value="{{ $request->email }}" />
                </div>
                <!--/Eメール-->

                <!--備考欄-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">備考欄</label>
                    {{ $request->note }}
                    <input type="hidden" name="note" value="{{ $request->note }}" />
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
