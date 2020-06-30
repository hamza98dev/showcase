@extends('layouts.app')
@section('seo')
<title>
  Apropos Trobel Maroc
</title>
<meta name="description" content="A propos de  TROBEL MAROC">
@endsection
@section('content')
    <div class="heroapropos">
        <h1>About Us</h1>
    </div>
    <div class="container">
        <div class="m-5" data-aos="fade-up"  data-aos-duration="500">
            <h1  style="font-weight: 600;color: forestgreen;font-size: 40px">TROBEL <span style="color: black;font-size: 20px;font-weight: 200">maroc</span> </h1>
            <hr>

                <div class="cotainer">
                    <h4 class="text-center my-2">Nos Services</h4>

                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div class="card my-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="00" >
  <div class="card-body">
    <div class="holder"><img src="{{asset('icons/bestseller.svg')}}" alt=""></div>

    <h5 class="card-title text-center my-2">Vente</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="card my-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" >
  <div class="card-body">
    <div class="holder"><img src="{{asset('icons/fix.svg')}}" alt=""></div>

    <h5 class="card-title text-center mt-2">Reparation</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="card my-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" >
  <div class="card-body">
    <div class="holder"><img src="{{asset('icons/tracking.svg')}}" alt=""></div>

    <h5 class="card-title text-center my-2">Livraison</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
