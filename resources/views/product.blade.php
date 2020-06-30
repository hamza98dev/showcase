@extends('layouts.app')
@section('seo')
<title>
  {{$data[0]->titre}}  
</title>
<meta name="description" content="{{$data[0]->description}}">
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach($data as $item)
                <div class="col-md-6 col-sm-12" data-aos="fade-right"  data-aos-duration="500">

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

                        <div class="carousel-inner">
                            @foreach($item->images as $key => $photo)
                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                    <img src="{{url('/storage/'. $photo->path)}}" class="d-block w-100 mh-75"  alt="{{$item->titre}}">
                                </div>
                            @endforeach
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-left"  data-aos-duration="500">
                    <h1 id="title">{{$item->titre}}</h1>
                    <hr>
                    <h4 STYLE="color: darkgrey" id="title">{{$item->prix}} DH</h4>
                    @if($item->stock >0)
                            <p id="stock">En Stock</p>
                        
                    @else
                        <p id="outstock">Epuise</p>
                    @endif

                    <p>{{$item->description}}</p>
                    <a href="/contact" class="btn mt-2 stylebuttons"><i class="fa fa-phone" aria-hidden="true"></i>
                        Contact Us</a>
                </div>
            @endforeach


        </div>
    </div>

    <div class="container">
        <hr>
        <h3 id="title" class="my-5">Autres Produits</h3>
        <div class="row">

            @foreach($random as $item)
                <div class="col-md-4 col-sm-12" data-aos="fade-up"  data-aos-duration="1000">
                    <div class="card my-2">
                        <img src="{{asset('storage/'.$item->images[0]->path)}}" class="card-img-top" alt="{{$item->titre}} ">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->titre}} </h5>
                            @if($item->stock >0)
                                <p id="stock">En Stock</p>
                            @else
                                <p id="outstock">Epuise</p>
                            @endif

                            <a href="{{url('/p/'.$item->id)}}" class="btn btn-primary"><i class="fa fa-eye mx-2" aria-hidden="true"></i>Voir</a>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
