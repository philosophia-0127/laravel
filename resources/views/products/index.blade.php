<x-layout>
    <div class="container">
        
        <h2 class="text-center mt-3">商品一覧</h2>
        <hr class="my-4">

            <div class="product-list mx-auto">
                @forelse ($products as $index => $product)

                    <div class="row mb-4">

                        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                            <div class="mt-5">
                                <img src="../images/cookie.jpg" width="250" height="170">
                                <h3 class="my-4">aaa</h3>
                                <p class="text-muted mb-0">aaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>

                                <a href="{{ route('products.show', $index) }}" class="btn btn-outline-primary px-5 mt-4">詳細</a>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                            <div class="mt-5">
                                <img src="../images/puding.jpg" width="250" height="170">
                                <h3 class="my-4">aaa</h3>
                                <p class="text-muted mb-0">aaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>

                                <a href="{{ route('products.show', $index) }}" class="btn btn-outline-primary px-5 mt-4">詳細</a>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                            <div class="mt-5">
                                <img src="../images/soda.jpg" width="250" height="170">
                                <h3 class="my-4">aaa</h3>
                                <p class="text-muted mb-0">aaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>

                                <a href="{{ route('products.show', $index) }}" class="btn btn-outline-primary px-5 mt-4">詳細</a>

                            </div>
                        </div>

                    </div>


                    <div class="row mb-4">

                        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                            <div class="mt-5">
                                <img src="../images/cookie.jpg" width="250" height="170">
                                <h3 class="my-4">aaa</h3>
                                <p class="text-muted mb-0">aaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>

                                <a href="{{ route('products.show', $index) }}" class="btn btn-outline-primary px-5 mt-4">詳細</a>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                            <div class="mt-5">
                                <img src="../images/puding.jpg" width="250" height="170">
                                <h3 class="my-4">aaa</h3>
                                <p class="text-muted mb-0">aaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>

                                <a href="{{ route('products.show', $index) }}" class="btn btn-outline-primary px-5 mt-4">詳細</a>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                            <div class="mt-5">
                                <img src="../images/soda.jpg" width="250" height="170">
                                <h3 class="my-4">aaa</h3>
                                <p class="text-muted mb-0">aaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaa
                                    <br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                </p>

                                <a href="{{ route('products.show', $index) }}" class="btn btn-outline-primary px-5 mt-4">詳細</a>

                            </div>
                        </div>

                    </div>

                @empty
                    No product yet.
                @endforelse
            </div>


    </div>
</x-layout>
