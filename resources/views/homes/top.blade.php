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
                                        <a href="{{ url('/products/{id}') }}">
                                            <img src="{{ asset('../images/ichigo.jpg') }}" class="w-100" alt="一枚目">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="">
                                            <img src="{{ asset('../images/chocolate_cake.jpg') }}" class="w-100" alt="二枚目">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="">
                                            <img src="{{ asset('../images/cocoa_puding.jpg') }}" class="w-100" alt="三枚目">
                                        </a>
                                    </div>
                                @empty
                                    NO Products Yet.
                                @endforelse

                            </div>

                        </div>
                    </div>

            </div>
        </div>







    </div>
</x-layout>
