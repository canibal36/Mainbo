@extends('frontend.layouts.main')

@section('head')
<title>Mainbo</title>
@endsection

@section('content')

<!-- Preloader area start -->
<div class="loading">
    <span class="text-capitalize">M</span>
    <span>a</span>
    <span>i</span>
    <span>n</span>
    <span>b</span>
    <span>o</span>
</div>

<div id="preloader">
</div>
<!-- Preloader area end -->

<!-- Mouse cursor area start here -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- Mouse cursor area end here -->

<main>

    <!-- Banner area start here -->
    <section class="banner-two">
        <div class="banner-two__shape-left d-none d-lg-block wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <img src="assets-landing/images/shape/vape1.png" alt="shape">
        </div>
        <div class="banner-two__shape-right d-none d-lg-block wow bounceInRight" data-wow-duration="1s" data-wow-delay=".1s">
            <img class="sway_Y__animation " src="assets-landing/images/shape/vape2.png" alt="shape">
        </div>
        <div class="swiper banner-two__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-bg" data-background="assets-landing/images/fondo.gif"></div>
                    <div class="container">
                        <div class="banner-two__content">
                            <h4 data-animation="fadeInUp" data-delay="1s"><img src="assets-landing/images/icon/fire.svg" alt="icon"> Conseguir <span class="primary-color">25% De descuento</span> Ahora</h4>
                            <h1 data-animation="fadeInUp" data-delay="1.3s">¡Encontraste nuestro catalogo de productos! <br>
                                Somos <span class="primary-color">Mainbo</span></h1>
                            <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Este es el catalogo de ropa mas completo y detallado que podrias encontrar <br> Disfrutalo...</p>
                            <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                <span class="mb-10">Nuestra tienda fisica esta en:</span>
                                <h3>El pasaje Tapia ambientes # 48 49 50</h3>
                            </div>
                            <div class="btn-wrp mt-65">
                                <a href="shop.html" class="btn-one" data-animation="fadeInUp" data-delay="1.8s"><span>Proceso de compra</span></a>
                                <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp" data-delay="1.9s"><span>Detalles</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-bg" data-background="assets-landing/images/fondo.gif"></div>
                    <div class="container">
                        <div class="banner-two__content">
                            <h4 data-animation="fadeInUp" data-delay="1s"><img src="assets-landing/images/icon/fire.svg" alt="icon"> Conseguir <span class="primary-color">25% De descuento</span> Ahora</h4>
                            <h1 data-animation="fadeInUp" data-delay="1.3s">¡Encontraste nuestro catalogo de productos! <br>
                                Somos <span class="primary-color">Mainbo</span></h1>
                            <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Este es el catalogo de ropa mas completo y detallado que podrias encontrar <br> Disfrutalo...</p>
                            <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                <span class="mb-10">Nuestra tienda fisica esta en:</span>
                                <h3>El pasaje Tapia ambientes # 48 49 50</h3>
                            </div>
                            <div class="btn-wrp mt-65">
                                <a href="shop.html" class="btn-one" data-animation="fadeInUp" data-delay="1.8s"><span>Proceso de compra</span></a>
                                <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp" data-delay="1.9s"><span>Detalles</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-bg" data-background="assets-landing/images/banner/fondo.gif"></div>
                    <div class="container">
                        <div class="banner-two__content">
                            <h4 data-animation="fadeInUp" data-delay="1s"><img src="assets-landing/images/icon/fire.svg" alt="icon"> Conseguir <span class="primary-color">25% De descuento</span> Ahora</h4>
                            <h1 data-animation="fadeInUp" data-delay="1.3s">¡Encontraste nuestro catalogo de productos! <br>
                                Somos <span class="primary-color">Mainbo</span></h1>
                            <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Este es el catalogo de ropa mas completo y detallado que podrias encontrar <br> Disfrutalo...</p>
                            <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                <span class="mb-10">Nuestra tienda fisica esta en:</span>
                                <h3>El pasaje Tapia ambientes # 48 49 50</h3>
                            </div>
                            <div class="btn-wrp mt-65">
                                <a href="shop.html" class="btn-one" data-animation="fadeInUp" data-delay="1.8s"><span>Proceso de compra</span></a>
                                <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp" data-delay="1.9s"><span>Detalles</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-two__arry-btn">
            <button class="arry-prev mb-15 banner-two__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
            <button class="arry-next active banner-two__arry-next"><i class="fa-light fa-chevron-right"></i></button>
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Category area start here -->
    <section class="category-area category-two pb-130 pt-130">
        <div class="container">
            <div class="bor-bottom pb-130">
                <div class="sub-title text-center mb-65 wow fadeInUp" data-wow-delay=".1s">
                    <h3><span class="title-icon"></span> Categorias principales <span class="title-icon"></span>
                    </h3>
                </div>
                <div class="swiper category__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category__item category-two__item text-center">
                                <a href="shop.html" class="category__image d-block">
                                    <img src="assets-landing/images/category/category-image1.png" alt="image" style="width: 100px">
                                    <div class="category-icon">
                                        <img src="assets-landing/images/category/category-icon1.png" alt="icon" style="width: 100px">
                                    </div>
                                </a>
                                <h4 class="mt-30"><a href="shop.html">Poleras</a></h4>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item category-two__item text-center">
                                <a href="shop.html" class="category__image d-block">
                                    <img src="assets-landing/images/category/category-image2.png" alt="image" style="width: 100px">
                                    <div class="category-icon">
                                        <img src="assets-landing/images/category/category-icon2.png" alt="icon" style="width: 100px">
                                    </div>
                                </a>
                                <h4 class="mt-30"><a href="shop.html">Canguros</a></h4>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item category-two__item text-center">
                                <a href="shop.html" class="category__image d-block">
                                    <img src="assets-landing/images/category/category-image3.png" alt="image" style="width: 100px">
                                    <div class="category-icon">
                                        <img src="assets-landing/images/category/category-icon3.png" alt="icon" style="width: 100px">
                                    </div>
                                </a>
                                <h4 class="mt-30"><a href="shop.html">Gorras</a></h4>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item category-two__item text-center">
                                <a href="shop.html" class="category__image d-block">
                                    <img src="assets-landing/images/category/category-image4.png" alt="image" style="width: 100px">
                                    <div class="category-icon">
                                        <img src="assets-landing/images/category/category-icon4.png" alt="icon" style="width: 100px">
                                    </div>
                                </a>
                                <h4 class="mt-30"><a href="shop.html">Pantalones cortos</a></h4>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item category-two__item text-center">
                                <a href="shop.html" class="category__image d-block">
                                    <img src="assets-landing/images/category/category-image5.png" alt="image" style="width: 100px">
                                    <div class="category-icon">
                                        <img src="assets-landing/images/category/category-icon5.png" alt="icon" style="width: 100px">
                                    </div>
                                </a>
                                <h4 class="mt-30"><a href="shop.html">Pantalones largos</a></h4> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item category-two__item text-center">
                                <a href="shop.html" class="category__image d-block">
                                    <img src="assets-landing/images/category/category-image6.png" alt="image" style="width: 100px">
                                    <div class="category-icon">
                                        <img src="assets-landing/images/category/category-icon6.png" alt="icon" style="width: 100px">
                                    </div>
                                </a>
                                <h4 class="mt-30"><a href="shop.html">Bestidos</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category area end here -->

    <!-- View area start here -->
    <section class="view-area">
        <div class="bg-image view__bg" data-background="assets-landing/images/bg/view-bg.jpg"></div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".1s">
                    <div class="view__left-item">
                        <div class="image">
                            <img src="assets-landing/images/view/cinturonportada1.jpg" alt="image">
                        </div>
                        <div class="view__left-content sub-bg">
                            <h2><a class="primary-hover" href="shop-single.html">Cinturones </a>
                            </h2>
                            <p class="fw-600"> Bestir bien ace la diferencia </p>
                            <a class="btn-two" href="shop-single.html"><span>Comprar ahora </span></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="view__item mb-25 wow fadeInDown" data-wow-delay=".2s">
                        <div class="view__content">
                            <h3><a class="primary-hover" href="shop-single.html"> Relojes</a></h3>
                            <p>contamos con una variedad de relojes. </p>
                            <a class="btn-two" href="shop-single.html"><span>Comprar ahora </span></a>
                        </div>
                        <div class="view__image">
                            <img src="assets-landing/images/view/reloj1.jpg" alt="image">
                        </div>
                    </div>
                    <div class="view__item wow fadeInUp" data-wow-delay=".3s">
                        <div class="view__content">
                            <h3><a class="primary-hover" href="shop-single.html">Cadenas Cubanas</a></h3>
                            <p>Para ti que te gusta lucir como un artista</p>
                            <a class="btn-two" href="shop-single.html"><span>Comprar ahora </span></a>
                        </div>
                        <div class="view__image">
                            <img src="assets-landing/images/view/cubanas1.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- View area end here -->

    <!-- Product area start here -->
    <section class="product-area pt-130 pb-130 mt-130">
        <div class="container">
            <div class="product__wrp pb-30 mb-65 bor-bottom d-flex flex-wrap align-items-center justify-content-xl-between justify-content-center">
                <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".1s">
                    <span class="title-icon mr-10"></span>
                    <h2>Últimos productos llegados</h2>
                </div>
                <ul class="nav nav-pills mt-4 mt-xl-0">
                    <li class="nav-item wow fadeInUp" data-wow-delay=".1s">
                        <a href="#latest-item" data-bs-toggle="tab" class="nav-link px-4 active">
                            Añadido recientemente
                        </a>
                    </li>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                        <a href="#top-ratting" data-bs-toggle="tab" class="nav-link px-4 bor-left bor-right">
                            Mejor calificado
                        </a>
                    </li>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                        <a href="#featured-products" data-bs-toggle="tab" class="nav-link ps-4">
                            En descuento
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="latest-item" class="tab-pane fade show active">
                    <div class="row g-4">

                        @foreach ($products as $product)
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                <a href="shop-single.html" class="product__image pt-20 d-block">
                                    <img class="product-image font-image" src="/images/{{ $product->path_imagen }}" alt="image" style="max-width: 300px; max-height: 200px; object-fit: cover;">
                                    <img class="product-image back-image" src="/images/{{ $product->path_imagen }}" alt="image" style="max-width: 300px; max-height: 200px; object-fit: cover;">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">{{ $product->nombre }}</a></h4>
                                    <del>{{ $product->precio }} Bs</del><span class="primary-color ml-10">{{ $product->precio }} Bs</span>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <a class="product__cart d-block bor-top" href="#0"><i class="fa-regular fa-cart-shopping primary-color me-1"></i>
                                    <span>Agregar al carrito</span></a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product area end here -->

    <!-- Discount area start here -->
    <section class="discount-area bg-image" data-background="assets-landing/images/bg/discount-bg2.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image mb-5 mb-lg-0"><img src="assets-landing/images/discount/discount-image2.png" alt="image"></div>
                </div>
                <div class="col-lg-6">
                    <div class="discount__item ps-0 pb-5 pb-lg-0 ps-lg-5">
                        <div class="section-header">
                            <div class="section-title-icon wow fadeInUp" data-wow-delay=".1s">
                                <span class="title-icon mr-10"></span>
                                <h2>Tu Carrito de compras</h2>
                            </div>
                            <p class="mt-30 mb-55 wow fadeInUp" data-wow-delay=".2s"> Aqui podras revisar y editar los productos que ya añadiste al
                                <br>
                                Carrito de compras.
                            </p>
                            <a class="btn-one wow fadeInUp" data-wow-delay=".3s" href="shop.html"><span>ir al Carrito</span></a>
                            <a class="off-btn wow fadeInUp" data-wow-delay=".4s" href="#0"><img class="mr-10" src="assets-landing/images/icon/fire.svg" alt="icon"> Conseguir <span class="primary-color">25%
                                    De Descuento</span> Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discount area end here -->

    <!-- Conseguir now area start here -->
    <section class="get-now-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <h4 class="mb-30 wow fadeInUp" data-wow-delay=".1s"><img src="assets-landing/images/icon/fire.svg" alt="icon">
                        Conseguir <span class="primary-color">25% De Descuento</span> Ahora</h4>
                    <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".2s">
                        <span class="title-icon mr-10"></span>
                        <h2>Esta es nuestra promoción actual</h2>
                    </div>
                    <div class="get-now__content">
                        <div class="get-info py-4 wow fadeInUp" data-wow-delay=".2s">
                            <del>Bs 250.00</del> <span>Bs 125.00</span>
                        </div>
                        <p class="fw-600 wow fadeInUp" data-wow-delay=".3s">Todos nuestros productos al 2 x 1 <br>
                            Asi es paga por uno y te llevas dos. </p>
                        <ul class="pt-30 pb-30 bor-bottom wow fadeInUp" data-wow-delay=".3s">
                            <li>Tiempo:</li>
                            <li>Inicio de la promoción 01/12/23</li>
                            <li>Fin de la promoción 10/12/23</li>
                        </ul>
                        <div class="time-up d-flex flex-wrap align-items-center gap-5 mt-30 wow fadeInUp" data-wow-delay=".4s">
                            <div class="info">
                                <h4>¡Aprovecha!</h4>
                                <span>La oferta finaliza en:</span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <div class="get-time">
                                    <h3 id="day">00</h3>
                                    <span>Dias</span>
                                </div>
                                <div class="get-time">
                                    <h3 id="hour">00</h3>
                                    <span>Hrs</span>
                                </div>
                                <div class="get-time">
                                    <h3 id="min">00</h3>
                                    <span>Min</span>
                                </div>
                                <div class="get-time">
                                    <h3 id="sec">00</h3>
                                    <span>Sec</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="get-now__image mt-5 mt-xl-0">
                        <div class="get-bg-image">
                            <img src="assets-landing/images/shop/get-bg.png" alt="image">
                        </div>
                        <div class="swiper get__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets-landing/images/shop/get-image.png" alt="image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets-landing/images/shop/get-image2.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="get-now-arry get-now__arry-left">
                            <i class="fa-light fa-chevron-left"></i>
                        </button>
                        <button class="get-now-arry get-now__arry-right text-warning">
                            <i class="fa-light fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get now area end here -->

    <!-- Text slider area start here -->
    <div class="container">
        <div class="bor-top pb-40"></div>
    </div>
    <div class="marquee-wrapper text-slider">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item">
                    Mainbo <img src="assets-landing/images/icon/title-left.svg" alt="icon"> <span>Moda</span>
                    <img src="assets-landing/images/icon/title-left.svg" alt="icon">
                    Mainbo <img src="assets-landing/images/icon/title-left.svg" alt="icon"> <span>Moda</span>
                    <img src="assets-landing/images/icon/title-left.svg" alt="icon">
                    Mainbo <img src="assets-landing/images/icon/title-left.svg" alt="icon"> <span>Moda</span>
                    <img src="assets-landing/images/icon/title-left.svg" alt="icon">
                    Mainbo <img src="assets-landing/images/icon/title-left.svg" alt="icon"> <span>Moda</span>
                    <img src="assets-landing/images/icon/title-left.svg" alt="icon">
                    Mainbo <img src="assets-landing/images/icon/title-left.svg" alt="icon"> <span>Moda</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="bor-top pb-65"></div>
    </div>
    <!-- Text slider area end here -->

    <!-- Gallery area start here -->
    <section class="gallery-area">
        <div class="swiper gallery__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery__item">
                        <div class="off-tag">Tik<br>
                            Tok</div>
                        <div class="gallery__image image">
                            <img src="assets-landing/images/gallery/gallery-image1.jpg" alt="image">
                        </div>
                        <div class="gallery__content">
                            <h3 class="mb-10"><a href="shop-2.html">Titulo Del video</a></h3>
                            <p>Descripción del video </p>
                            <a href="shop-2.html" class="btn-two mt-25"><span>Ver video</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery__item">
                        <div class="off-tag">Tik<br>
                            Tok</div>
                        <div class="gallery__image image">
                            <img src="assets-landing/images/gallery/gallery-image2.jpg" alt="image">
                        </div>
                        <div class="gallery__content">
                            <h3 class="mb-10"><a href="shop-2.html">Titulo Del video</a></h3>
                            <p>Descripción del video </p>
                            <a href="shop-2.html" class="btn-two mt-25"><span>Ver video</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery__item">
                        <div class="off-tag">Tik<br>
                            Tok</div>
                        <div class="gallery__image image">
                            <img src="assets-landing/images/gallery/gallery-image3.jpg" alt="image">
                        </div>
                        <div class="gallery__content">
                            <h3 class="mb-10"><a href="shop-2.html">Titulo Del video</a></h3>
                            <p>Descripción del video </p>
                            <a href="shop-2.html" class="btn-two mt-25"><span>Ver video</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery__item">
                        <div class="off-tag">Tik<br>
                            Tok</div>
                        <div class="gallery__image image">
                            <img src="assets-landing/images/gallery/gallery-image4.jpg" alt="image">
                        </div>
                        <div class="gallery__content">
                            <h3 class="mb-10"><a href="shop-2.html">Titulo Del video</a></h3>
                            <p>Descripción del video </p>
                            <a href="shop-2.html" class="btn-two mt-25"><span>Ver video</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery__item">
                        <div class="off-tag">Tik<br>
                            Tok</div>
                        <div class="gallery__image image">
                            <img src="assets-landing/images/gallery/gallery-image5.jpg" alt="image">
                        </div>
                        <div class="gallery__content">
                            <h3 class="mb-10"><a href="shop-2.html">Titulo Del video</a></h3>
                            <p>Descripción del video </p>
                            <a href="shop-2.html" class="btn-two mt-25"><span>Ver video</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery area end here -->

    <!-- Brand area start here -->
    <section class="brand-area pt-130 pb-130">
        <div class="container">
            <div class="sub-title text-center mb-65">
                <h3><span class="title-icon"></span> Las marcas que vendemos <span class="title-icon"></span>
                </h3>
            </div>
            <div class="swiper brand__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="assets-landing/images/brand/brand1.png" alt="icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="assets-landing/images/brand/brand2.png" alt="icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="assets-landing/images/brand/brand3.png" alt="icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="assets-landing/images/brand/brand4.png" alt="icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="assets-landing/images/brand/brand5.png" alt="icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item bor radius-10 text-center p-4">
                            <img src="assets-landing/images/brand/brand6.png" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand area end here -->
</main>

<!-- Back to top area start here -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Back to top area end here -->

@endsection