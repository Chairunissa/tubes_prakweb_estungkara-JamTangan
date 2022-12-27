@extends('layouts.main')

@section('container')
<body>
    <main class="main">
        <!--=============== HOME ===============-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div>
                    <img src="img/home2.png" alt="" class="home__img">
                </div>

                <div class="home__data">
                    <div class="home__header">
                        <h1 class="home__title">Welcome</h1>
                        <h2 class="home__subtitle">De'Orologio</h2>
                    </div>

                    <div class="home__footer">
                        <h3 class="home__title-description">Overview</h3>
                        <p class="home__description">Explore the collection and find the watch that suits you. Selected from the best
                            brands and assembled with attractive designs, superior products, and contemporary styles.
                        </p>
                        <a href="/produk" class="button button--flex">
                            <span class="button--flex">
                                <i class="ri-shopping-bag-line button__icon"></i></i> New Products
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== Catalog ===============-->
        <section class="catalog section">
            <div class="catalog__container container grid">
                <img src="img/casio.png" alt="" class="catalog__img">
                <img src="img/rolex.png" alt="" class="catalog__img">
                <img src="img/chanel.png" alt="" class="catalog__img">
            </div>
        </section>
        <!--=============== Best Collection ===============-->
        <section class="products section" id="products">
            <h2 class="section__title section__title-gradient products__line">
                Best <br> Collection
            </h2>

            <div class="products__container container grid">
                <article class="products__card">
                    <div class="products__content">
                        <img src="img/bc2.png" alt="" class="products__img">

                        <h3 class="products__title">Rolex Submariner </h3>
                        <span class="products__price">Black Silver</span>

                        <button class="button button--flex products__button">
                            <i class="">View</i>
                        </button>
                    </div>
                </article>
                <article class="products__card">
                    <div class="products__content">
                        <img src="img/bc2.png" alt="" class="products__img">

                        <h3 class="products__title">Rolex Milgauss</h3>
                        <span class="products__price">Black Green</span>

                        <button class="button button--flex products__button">
                            <i class="">View</i>
                        </button>
                    </div>
                </article>
                <article class="products__card">
                    <div class="products__content">
                        <img src="img/bc4.png" alt="" class="products__img">

                        <h3 class="products__title">Chanel</h3>
                        <span class="products__price">White</span>

                        <button class="button button--flex products__button">
                            <i class="">View</i>
                        </button>
                    </div>
                </article>
                <article class="products__card">
                    <div class="products__content">
                        <img src="img/bc4.png" alt="" class="products__img">

                        <h3 class="products__title">Chanel</h3>
                        <span class="products__price">White</span>

                        <button class="button button--flex products__button">
                            <i class="">View</i>
                        </button>
                    </div>
                </article>

                <article class="products__card">
                    <div class="products__content">
                        <img src="img/bc5.png" alt="" class="products__img">

                        <h3 class="products__title">Casio</h3>
                        <span class="products__price">Rose Gold</span>

                        <button class="button button--flex products__button">
                            <i class="">View</i>
                        </button>
                    </div>
                </article>
                <article class="products__card">
                    <div class="products__content">
                        <img src="img/bc5.png" alt="" class="products__img">

                        <h3 class="products__title">Casio</h3>
                        <span class="products__price">Rose Gold</span>

                        <button class="button button--flex products__button">
                            <i class="">View</i>
                        </button>
                    </div>
                </article>
            </div>
        </section>
        <!--=============== about ===============-->
        <section class="about section grid" id="about">
            <h2 class="section__title section__title-gradient">About</h2>

            <div class="about__container container grid">
                <div class="about__content grid">
                    <div class="about__data">
                        <i class="ri-thumb-up-line about__icon"></i>
                        <h3 class="about__title">Commited to the best <br> quality and result</h3>

                    </div>

                    <div class="about__data">
                        <i class="ri-time-line about__icon"></i>
                        <h3 class="about__title">The best product for <br> your best time</h3>

                    </div>

                    <div class="about__data">
                        <i class="ri-earth-line about__icon"></i>
                        <h3 class="about__title">Universal timekeepers <br> of the world</h3>

                    </div>

                    <div class="about__data">
                        <i class="ri-history-line about__icon"></i>
                        <h3 class="about__title">Perfect moment <br> between past and future</h3>
                    </div>
                </div>

                <div>
                    <img src="img/about.png" alt="" class="about__img">
                </div>
            </div>
        </section>


        <!--=============== DISCOUNT ===============-->
        <section class="discount section">
            <div class="discount__container container grid">
                <div class="discount__animate">
                    <h2 class="discount__title">Let's look <br> at what's in the catalog</h2>
                    <p class="discount__description">Get it now.</p>
                    <a href="/catalog" class="button button--flex">
                        <i class="ri-shopping-bag-line button__icon"></i> Look Catalog
                    </a>
                </div>

                <img src="img/bc6.png" alt="" class="discount__img">
            </div>
        </section>

    </main>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line scrollup__icon"></i>
    </a>

</body>


@endsection
