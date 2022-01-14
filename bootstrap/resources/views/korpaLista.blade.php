@extends('master')
@section("content")

<div class ="custom-product"> 
<div class = "col-sm-6">
<div class = "pretrazeni-proizvod">
    <h4> Rezultati pretrage</h4>
    <a class = "dugme-naruci" href = "naruci">Naruči</a><br><br> <!--pravimo rutu za naruci -->
    @foreach($products as $item)
<div class=" row najtrazeniji-proizvod korpa-lista">
      <div class = "col-sm-3"> 
        <a href = "opis/{{$item->id}}">   
          <img class ="najtrazeniji-slike" src= "{{$item->slika}}">
           
        </a>
      </div>

      <div class = "col-sm-4"> 
            <div class="">
                <h3>{{$item->naziv}}</h3>
                <h5>{{$item->karakteristike}}</h5>
            </div>
        
      </div>

      <div class = "col-sm-4"> 
       <a href = "/uklonjenaStavka/{{$item->korpa_id}}" class = "dugme-ukloniIzKorpe">Ukloni</a>
      </div>
      <a class = "dugme-naruci" href = "naruci">Naruči</a><br><br>
      </div>
     @endforeach
    </div>
</div>

</div>
@endsection