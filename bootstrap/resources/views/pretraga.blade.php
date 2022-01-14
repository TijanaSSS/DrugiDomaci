
@extends('master')
@section("content")
<!--Ovo mozemo videti na stranici tek kada napravimo rutu -> routes-web.php -->
<div class ="custom-product">     
<!-- Za proizvode koji su najtrazeniji-->

<div class = "col-sm-4"> 
<a hef = "#"> Filter</a>
</div>

<div class = "col-sm-4">
<div class = "pretrazeni-proizvod">
    <h4> Rezultati pretrage</h4>
    @foreach($products as $item)
<div class="najtrazeniji-proizvod">
<a href = "opis/{{$item['id']}}">    <!-- linkovali smo slike-->
      <img class ="najtrazeniji-slike" src= "{{$item['slika']}}">
      <div class="">
        <h3>{{$item['naziv']}}</h3>
        <h5>{{$item['karakteristike']}}</h5>
      </div>
</a>
      </div>
     @endforeach
    </div>
</div>


</div>
@endsection