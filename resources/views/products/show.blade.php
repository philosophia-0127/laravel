<x-layout>
    <div class="container">
        <div class="row">
            <div class="products_show col-8 mx-auto py-4 text-center border border-primary rounded-pill">

                <h1>{{ $product }}</h1>

                <div class="back-link my-3">
                    &laquo; <a href="{{ route('products.index') }}">Back</a>
                </div>

                <a href="{{ url('/') }}" class="link">カートへ入れる</a>

                <a href="{{ url('orders/input') }}" class="link">注文画面へ進む</a>

            </div>
        </div>
    </div>
</x-layout>
