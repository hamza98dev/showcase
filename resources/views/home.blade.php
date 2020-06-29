@extends('layouts.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="row justify-content-center">

        <div class="col-md-12">


            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 id="title" class="mt-2">Dashboard</h5>

            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary "> <i class="fa fa-plus mr-2" aria-hidden="true"></i>Ajouter</button>




                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter Une Machine</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{url('/postmachine')}}" method="post" enctype='multipart/form-data'>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="modal-body">
                                <label for="">titre</label>
                                <input name="titre" class="form-control" type="text">
                                <label for="">Description</label>
                                <input name="description" class="form-control" type="text">
                                <label for="">Prix</label>
                                <input name="prix" class="form-control" type="text">
                                <label for="">Quantite</label>
                                <input name="quantite" class="form-control" type="text">
                                <input type="file" name="attachment[]" multiple>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Ajouter</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead>
                        <tr>

                            <th scope="col">titre</th>
                            <th scope="col">Quantite</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($products as $produit)
                                <td>{{$produit->titre}}</td>
                                <td>{{$produit->stock}}</td>
                                <td>{{$produit->prix}}</td>
                                <td>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <form action="{{url('/deletemachine/'.$produit->id)}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button class="dropdown-item">
                                                    Supprimier
                                                </button>
                                            </form>
                                            <a class="dropdown-item" href="{{url('/p/'.$produit->id)}}">Voir</a>
                                            <a class="dropdown-item" href="{{url('/update/'.$produit->id)}}">Modifier</a>
                                        </div>
                                    </div>


                                </td>
                        </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
