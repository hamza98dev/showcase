@extends('layouts.app')
@section('seo')
<title>
  Trobel Maroc
</title>
<meta name="description" content="Ventes Des Machines Industrielle Au maroc">
@endsection
@section('content')
        <div class="hero">
            <div class="underhero" style="z-index: 999" data-aos="fade-up"  data-aos-duration="500">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                <h1 id="title" style="font-size: 60px;color:black" class="m-3">Trobel Maroc</h1>
                <h3 class="ml-3" style="color: darkgrey;">Vente Des Machines Industrielles Au Maroc</h3>
                <div class="m-3">
                    <a href="/contact">
                                            <button class="btn stylebuttons" > <i class="fa fa-phone" aria-hidden="true"></i> Contactez-nous</button>
                    </a>
                </div>
            </div>
            <div class="shadows" data-aos="zoom-in" data-aos-delay="200"  data-aos-duration="500">
                <h1 ID="title">TROBEL</h1>
            </div>
            </div>

        </div>
    <div class="section">
        <h4 class="subtitle">Notre Catalogue</h4>

        <hr>
        <div class="container">
            <div class="row">
                @if(empty($data))
                    <div class="d-flex justify-content-center">
                        <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                @else
            @foreach($data as $item)
                    <div class="col-md-4 col-sm-12 " data-aos="fade-up"  data-aos-duration="500" >
                        <div class="card my-2">
                                <img src="{{asset('storage/'.$item->images[0]->path)}}" class="card-img-top" alt="{{$item->titre}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->titre}} </h5>
                                @if($item->stock >0)
                                    <p id="stock">En Stock</p>
                                @else
                                    <p id="outstock">Epuise</p>
                                @endif

                                <a href="{{url('/p/'.$item->id.'/'.$item->slug)}}" class="btn btn-primary" ><i class="fa fa-eye mr-1" aria-hidden="true"></i>Voir</a>

                            </div>
                        </div>
                    </div>
                @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection
