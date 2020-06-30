@extends('layouts.app')
@section('seo')
<title>
  Contact Trobel Maroc
</title>
<meta name="description" content="Contactez TROBEL MAROC">
@endsection
@section('content')
    <div class="heroContact">
        <h1>Contact Us</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right"  data-aos-duration="500">
                <h1 id="title">Via Mail</h1>
                <h3 class="mt-4">Contactez:  <span id="title"> <i class="fa fa-mail" aria-hidden="true"></i> LoremIpsum@gmail.com</span> </h3>
<hr>
<form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea placeholder="Enter Message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
   
    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-paper-plane" aria-hidden="true"></i> Envoyer</button>
  </form>
            </div>
            <div class="col-md-6" data-aos="fade-left"  data-aos-duration="500">
                <h1 id="title" >Via Telephone</h1>
                <h3 class="mt-4">Apellez le :  <span id="title"> <i class="fa fa-phone" aria-hidden="true"></i> +212661353636</span> </h3>
                
               
               
            </div>
        </div>
    </div>
@endsection
