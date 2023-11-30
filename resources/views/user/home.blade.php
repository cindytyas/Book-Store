@extends('layouts.nav-user')

@section('content')
    <!-- Hero section -->
    <section class="hero-section set-bg" data-setbg="{{ asset('user-template/img/bg.jpg') }}">
        <div class="hero-slider owl-carousel">
            <div class="hs-item">
                <div class="hs-left"><img src="{{ asset('user-template/img/slider-img.png') }}" alt=""></div>
                <div class="hs-right">
                    <div class="hs-content">
                        <div class="price">from $19.90</div>
                        <h2><span>2018</span> <br>summer collection</h2>
                        <a href="" class="site-btn">Shop NOW!</a>
                    </div>
                </div>
            </div>
            <div class="hs-item">
                <div class="hs-left"><img src="img/slider-img.png" alt=""></div>
                <div class="hs-right">
                    <div class="hs-content">
                        <div class="price">from $19.90</div>
                        <h2><span>2018</span> <br>summer collection</h2>
                        <a href="" class="site-btn">Shop NOW!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product section -->
    <section class="product-section spad">
        <div class="container">
            <ul class="product-filter controls">
                <li class="control" data-filter=".new">New arrivals</li>
                <li class="control" data-filter="all">Recommended</li>
                <li class="control" data-filter=".best">Best sellers</li>
            </ul>
            <div class="row" id="product-filter">
                @foreach ($product as $data)
                    <div class="mix col-lg-3 col-md-6 best">
                        <div class="product-item">
                            <figure>
                                <img src="{{ url('storage/' . $data->gambar) }}" alt="">
                                <div class="pi-meta">
                                    <div class="pi-m-left">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>quick view</p>
                                    </div>
                                    <div class="pi-m-right">
                                        <img src="img/icons/heart.png" alt="">
                                        <p>save</p>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h6>{{ $data->name }}</h6>
                                <p>Rp. {{ number_format($data->harga) }}</p>
                                <form action="{{ route('transaction.store') }}" method="POST">
                                    @csrf
                                    <input name="product_id" value="{{ $data->id }}" type="hidden" hidden>
                                    <button type="submit" class="site-btn btn-line">Add Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product section end -->
@endsection
