@extends('layouts.app')
@section('content')
        <div class="hero">
            <div class="underhero" style="z-index: 999" data-aos="fade-up"  data-aos-duration="1000">
                <h1 id="title" style="font-size: 60px" class="m-3">Trobel Maroc</h1>
                <h3 class="ml-3" style="color: darkgrey;">Vente Des Machines Industrielles Au Maroc</h3>
                <div class="m-3">
                    <button class="btn stylebuttons" > <i class="fa fa-phone" aria-hidden="true"></i> Contactez-nous</button>
                </div>
            <div class="shadows">
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
                                <img src="{{asset('storage/'.$item->images[0]->path)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->titre}} </h5>
                                @if($item->stock >0)
                                    <p id="stock">En Stock</p>
                                @else
                                    <p id="outstock">Epuise</p>
                                @endif

                                <a href="{{url('/p/'.$item->id)}}" class="btn btn-primary" ><i class="fa fa-eye mr-1" aria-hidden="true"></i>Voir</a>

                            </div>
                        </div>
                    </div>
                @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection
