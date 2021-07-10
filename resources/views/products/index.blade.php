<x-layout>
    <div class="container">

        <h2 class="text-center mt-3">商品一覧</h2>
        <hr class="my-4">

            <div class="product-list mx-auto">

                <div class="row mb-4">
                    @forelse ($products as $index => $product)

                        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                            <div class="mt-5">
                                <img src="{{ asset($product->image) }}" width="250" height="170">
                                <h3 class="my-4">{{ $product->product_name }}</h3>
                                <p class="text-muted mb-0">{{ $product->description }}!!</p>
                                <p>{{ number_format($product->price) }}円</p>

                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary px-5 mt-4">詳細</a>

                            </div>
                        </div>

                    @empty
                        No product yet.
                    @endforelse
                </div>

            </div>


    </div>
</x-layout>
