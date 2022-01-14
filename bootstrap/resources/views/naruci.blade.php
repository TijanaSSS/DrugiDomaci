@extends('master')
@section("content")

<div class ="custom-product"> 
<div class = "col-sm-4">
<table class="table">
    
    <tbody>
      <tr>
        <td>Cena</td>
        <td>{{$ukupno}} din</td>
   
      </tr>
      <tr>
        <td>PDV</td>
        <td>0 din</td>
    
      </tr>
      <tr>
        <td>Poštarina</td>
        <td>300 din</td>
      
      </tr>
      <tr>
        <td>Ukupno za plaćanje</td>
        <td>{{$ukupno+300}} din</td>
       
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/narucistrana" method = "POST">
  @csrf
  <div class="form-group">
    <textarea name = "adresa" placeholder = "Unesite adresu" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Način plaćanja</label>
    <p><br>
    <input type="radio" value = "cash" name = "payment"><span>Plaćanje karticom</span><br>
    <input type="radio" value = "cash" name = "payment"><span>Plaćanje pouzećem</span>
</p>
  </div>
 
  <button type="submit" class="btn btn-default">Plati</button>
</form>
</div>
</div>

</div>
@endsection