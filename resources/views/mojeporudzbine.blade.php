@extends('master')
@section("content")

<div class ="custom-product"> 
<div class = "col-sm-6">
<div class = "pretrazeni-proizvod">
  <h4> <b>Moje porudžbine</b> </h4>
  @foreach($porudzbina as $item)
  <div class= " row najtrazeniji-proizvod korpa-lista"> 
    <div class = "col-sm-3"></div>
      
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table">
        <br> <hr>
        <a href = "opis/{{$item->id}}" >   
        <!--  <img class ="najtrazeniji-slike" src="{{$item->slika}}" >  -->
        Pogledaj poruceni prozvod!
        </a>
        <br>
        <tr  style="color: #000; font-weight:bold;">
          <th>Status </th>
          <th>Adresa </th>
          <th>Status placanja</th>
          <th>Nacin placanja</th>
          <th></th>
        </tr>
        <tr style="color: #000; font-weight:bold;">
          <td>{{$item->status}}</td>
          <td>{{$item->adresa}}</td>
          <td>{{$item->status_placanja}}</td>
          <td>{{$item->nacin_placanja}}</td>
        </tr>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>
</div>
@endsection
