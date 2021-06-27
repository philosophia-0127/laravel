<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 bg-success">
                sss
            </div>
            <div class="col-lg-6 bg-primary">
                sss
            </div>
        </div>

            <div class="new-product mt-5">
                <h2>新着商品</h2>
                <div class="row">
                    <div class="col-3">
                        <ul>
                            @forelse ($posts as $post)
                                <li>
                                    <a href="{{ url('/about') }}" method="get">
                                        {{ $post }}
                                    </a>
                                </li>
                            @empty
                                <li>空ですよ！</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</x-layout>
