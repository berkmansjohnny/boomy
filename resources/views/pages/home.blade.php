@extends('_layouts.master')
@section('page-content')
{{-- YELLOW INTRO --}}
<section class="intro bg-yellow">
<div class="container">
    <div class="row center-center">
        <div class="column-6">
            <h2>Het zijn géén snacks, maar</h2>
            <h1>hoogwaardige kauw- en beloningsartikelen</h1>
            <p>Alle Boomy Animal Crackers-producten zijn geproduceerd op basis van zorgvuldig geselecteerde grondstoffen en verwerkt volgens de modernste technieken. Naast deze kwaliteitsvolle kauw- en beloningsartikelen heeft Boomy Animal Crackers ook een premiumlijn maaltijdworsten en een reeks voedingssupplementen in haar assortiment. Al deze Boomy Animal Crackers-producten zijn een goede aanvulling op de dagelijkse voeding van uw huisdier.</p>
            <a href="#" class="btn btn-yellow ">Lees meer <i class="fa fa-angle-right"></i></a>
        </div>

    </div>
    <div class="dog-bowl">
        <img src="assets/img/dog-bowl.png" />
    </div>
</div>
</section>
<!--CATALOGUS    -->
<section class="catalogus">
	<div class="container">
    <div class="row">
        <img src="assets/img/catalogus.png" class="booklet" />
				<a href="/uploads/muva-catalogus.pdf" title="De Muva catalogus">
        <div class="circle-button text-center">
            <img src="assets/img/icons/icon-book.png"/>
            <h1>0nze catalogus</h1>
            <p>Download hier</p>
        </div>
			</a>
    </div>
</div>
</section>
<!-- PRODUCT IN DE KIJKER    -->
<section class="in-de-kijker">
<div class="container">
    <div class="row">
        <div class="large-6 column">
            <img src="assets/img/products/pressedbone.png" alt="Pressed Bone" />
         </div>
        <div class="large-6 column">
        <h2>Bacon, Beef &amp; Chicken</h2>
        <h1>Pressed bone </h1>
        <p>Boomy Animal Crackers Jerky 100 % vlees zijn 100 % puur vleesproducten waardoor de acceptatiegraad zeer hoog is. Ze zijn luchtgedroogd en bevatten geen kleurstoffen en geen bewaarmiddelen. Aangezien de producten bestaan uit 100 % puur vlees zijn ze uitermate geschikt voor honden met een granenallergie. Boomy Animal Crackers Jerky 100 % vlees zijn een vrij uniek product die in de toekomst wel eens zou kunnen uitgroeien tot een glutenvrij topproduct.</p>
        <a href="#" class="btn btn-brown ">Lees meer <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>
</section>

<!--GRID PRODUCTEN+LIFESTYLE    -->
<section class="row">
    <div class="column-3 home-grid">
        <img src="assets/img/grid/grid-koekjes.png" class="bg-img" alt="Boomy koekjes">
    </div>
    <div class="column-3 home-grid bg-brown">
        <div class="grid-content">
						<img src="assets/img/products/box1.png" alt="muva" class="icon">
						<h3>Uw huisdier,onze zorg.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pretium elementum ipsum vel euismod. Integer elit eros.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pretium elementum ipsum vel euismod. Integer elit eros.</p>
        </div>
    </div>
    <div class="column-3 home-grid">
        <img src="assets/img/grid/grid-lifestyle.png" class="bg-img" alt="Boomy Animal Crackers">
    </div>
    <div class="column-3 home-grid bg-white">
        <div class="grid-content">
						<img src="assets/img/products/box2.png" alt="muva" class="icon">
						<h3>Méér dan voeding</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pretium elementum ipsum vel euismod. Integer elit eros.</p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="column-3 home-grid bg-white">
        <div class="grid-content">
						<img src="assets/img/products/box3.png" alt="muva" class="icon">
						<h3>Paarden zijn ook huisdieren</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pretium elementum ipsum vel euismod. Integer elit eros.</p>
        </div>
    </div>
    <div class="column-3 home-grid">
        <img src="assets/img/grid/grid-horse.png" class="bg-img" alt="Boomy Animal Crackers">
    </div>
    <div class="column-3 home-grid bg-brown">
        <div class="grid-content">
						<img src="assets/img/products/box4.png" alt="muva" class="icon">
						<h3>Kwaliteitsvolle producten</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pretium elementum ipsum vel euismod. Integer elit eros.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pretium elementum ipsum vel euismod. Integer elit eros.</p>
        </div>
    </div>
    <div class="column-3 home-grid">
        <img src="assets/img/grid/grid-bones.png" class="bg-img" alt="Boomy koekjes">
    </div>
</section>

<!-- BROWN QUOTE  -->
<section class="bg-quote">
<div class="container">
    <div class="row center-center">
    <section class="column-6 text-center bg-brown">
        <h1>Boomy Animal Crackers</h1>
        <span class="line"></span>
        <h2>Door onze gedrevenheid, professionaliteit en flexibiliteit zijn we inmiddels uitgegroeid tot een toonaangevende groothandel in de branche!
</h2>
        <p>"Enkel en alleen de beste producten zijn goed genoeg om onder ons merk Boomy Animal Crackers op de markt te komen." - Pascal Münstermann</p>
    </section>
    </div>
</div>
</section>
@endsection