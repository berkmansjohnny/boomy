@extends('_layouts.master')
@section('page-content')

    <header class="intro-product bg-green">
        <div class="container">
            <div class="row stack-l">
                <div class="column-7">
                    <h1 class="first">Hoogwaardige kauw- en beloningsartikelen</h1>
                    <h2>Wij weten wat jouw hond gelukkig maakt</h2>
                </div>
                <div class="dog">
                    <img src="{{ asset('assets/img/dogs/bulldog.png') }}" />
                </div>
            </div>
        </div>
    </header>

    <!--GRID PRODUCTEN -->
    <section class="products">
        <div class="container">
            <div class="row stack-l gutter">
                <figure class="column-3">
                    <a href="{{ route('pages.productdetail') }}">
                        <div class="box">
                            <img src="{{ asset('assets/img/products/koekjes.png') }}" alt="Boomy animal crackers - koekjes">
                            <figcaption>
                                Koekjes
                            </figcaption>
                        </div>
                    </a>
                </figure>    
                <figure class="column-3">
                    <div class="box">
                        <img src="{{ asset('assets/img/products/koekjes.png') }}" alt="Boomy animal crackers - koekjes">
                        <figcaption>
                            Koekjes
                        </figcaption>
                    </div>
                </figure>
                <figure class="column-3">
                    <div class="box">
                        <img src="{{ asset('assets/img/products/koekjes.png') }}" alt="Boomy animal crackers - koekjes">
                        <figcaption>
                            Koekjes
                        </figcaption>
                    </div>
                </figure>
                <figure class="column-3">
                    <div class="box">
                        <img src="{{ asset('assets/img/products/koekjes.png') }}" alt="Boomy animal crackers - koekjes">
                        <figcaption>
                            Koekjes
                        </figcaption>
                    </div>
                </figure>
            </div>
        </div>
    </section>

    <!-- DOG LIFESTYLE QUOTE  -->
    <section class="dog-lifestyle">
        <div class="row right">
            <section class="column-6 inset-l">
                <p>Omdat Boomy Animal Crackers over een zeer uitgebreid assortiment beschikt, kan u bij ons terecht voor dé geschikte snack voor zowel jonge, oudere, kleine en grotere honden. Ook voor honden met speciale voedingseisen (light, anti-allergeen, …) kan u bij ons terecht. De meeste van onze producten zijn te verkrijgen in klein- en grootverpakkingen, zodat ook de grootverbruiker bij ons zijn gading vindt.</p>
            </section>
        </div>
    </section>
@endsection