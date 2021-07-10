<x-layout>
    <div class="container">


        <div class="row">
            <div class="col-10 mt-5 mx-auto">

                <div class="top-image">
                    <div class="darkchange">
                        <div class="description">
                            <p>
                                ようこそ、Asana Cakeへ！<br>
                                このサイトは、ケーキ販売のECサイトになります。<br>
                                会員でない方も商品の閲覧はできますが、<br>
                                購入には会員登録が必要になります。
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-8 mt-5 mx-auto">

                <div class="card text-white bg-info my-4 text-center">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">New Products</h5>
                    </div>
                </div>

                <!--スライドショー-->
                <div class="slide-show mx-auto col-10">
                    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselIndicators" data-slide-to="2"></li>
                        </ol>

                            <div class="carousel-inner">

                                @forelse ($products as $product)
                                    <div class="carousel-item active">
                                        <a href="{{ route('products.show', $product) }}">
                                            <img src="{{ asset('../images/ichigo.jpg') }}" class="w-100 h-100" alt="一枚目">
                                        </a>
                                    </div>

                                    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                @empty
                                    No Products Yet.
                                @endforelse

                            </div>

                    </div>
                </div>



















            </div>
        </div>







    </div>
</x-layout>
