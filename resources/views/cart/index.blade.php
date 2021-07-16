<x-layout>
    <div class="container">
        <div class="cart__title title-logo h4">
            Shopping Cart
        </div>
        @if(count($line_items) > 0)
            <div class="cart-wrapper">
                <div class="row">
                    @foreach ($line_items as $item)
                        <div class="card col-4 my-4">

                                <img src="{{ asset($item->image) }}" class="col-10 mx-auto mt-4">
                                <div class="card-body">
                                    <div class="ms-3">
                                        {{ $item->name }}
                                    </div>
                                    <div class="ms-3">
                                        {{ $item->pivot->quantity }}個
                                    </div>
                                    <div class="text-center">
                                        ￥{{ number_format($item->price * $item->pivot->quantity) }}
                                    </div>
                                </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="cart__sub-total text-center border-bottom py-3 h5">
                小計：￥{{ number_format($total_price) }} 円
            </div>
        @else
            <div class="cart__empty">
                カートに商品が入っていません。
            </div>
        @endif
    </div>
</x-layout>
