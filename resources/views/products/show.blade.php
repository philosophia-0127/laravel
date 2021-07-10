<x-layout>
    <div class="container">
        <div class="row">
            <div class="products_show col-8 mx-auto py-4 text-center border">

                <div class="product">
                    <img src="{{ asset($product->image) }}" class="product-img" width="400" height="270">
                    <div class="product__content-header text-center">
                        <div class="product__name">
                            {{ $product->product_name }}
                        </div>
                        <div class="product__price">
                            {{ number_format($product->price) }}円
                        </div>
                    </div>
                    {{ $product->description }}
                </div>

                <div class="back-link my-3">
                    &laquo; <a href="{{ route('products.index') }}">Back</a>
                </div>

                <form method="POST" action="{{ route('line_item.create') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}"/>
                    <div class="product__quantity">
                        <input type="number" name="quantity" min="1" value="1" require/>
                    </div>
                    <div class="product__btn-add-cart">
                        <button type="submit" class="link mt-4">カートに追加する</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>
