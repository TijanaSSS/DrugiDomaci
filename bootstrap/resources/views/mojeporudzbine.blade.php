@extends('master')
@section("content")

<div class ="custom-product"> 
<div class = "col-sm-6">
<div class = "pretrazeni-proizvod">
    <h4> Moje porudžbine</h4>

    @foreach($porudzbine as $item)
<div class=" row najtrazeniji-proizvod korpa-lista">
      <div class = "col-sm-3"> 
        <a href = "opis/{{$item->id}}">   
          <img class ="najtrazeniji-slike" src= "{{$item->slika}}">
           
        </a>
      </div>

      <div class = "col-sm-4"> 
            <div class="">
                <!--<h3>Naziv : {{$item->naziv}}</h3> -->
                <h5>Status :{{$item->status}}</h5>
                <h5>Adresa: {{$item->adresa}}</h5>
                <h5>Status placanja : {{$item->status_placanja}}</h5>
                <h5>Nacin placanaja : {{$item->nacin_placanja}}</h5>
             
            </div>
        
      </div>
      
      </div>
     @endforeach
    </div>
</div>

</div>
@endsection 