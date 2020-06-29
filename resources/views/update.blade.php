@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-xs-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 id="title" class="mt-2">Modifier </h5>
                    </div>
                    <div class="card-body">

                        <form action="{{url('/modifie/'.$data[0]->id)}}" method="post" >
                 {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="modal-body">
                                <label for="">titre</label>
                                <input name="titre" class="form-control" type="text" value="{{$data[0]->titre}}" >
                                <label for="">Description</label>
                                <input name="description" class="form-control" type="text" value="{{$data[0]->description}}">
                                <label for="">Prix</label>
                                <input name="prix" class="form-control" type="text" value="{{$data[0]->prix}}">
                                <label for="">Quantite</label>
                                <input name="quantite" class="form-control" type="text"  value="{{$data[0]->stock}}">
                            </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Modifier</button>
                        </div> </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
