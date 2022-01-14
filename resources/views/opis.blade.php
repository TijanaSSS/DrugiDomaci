@extends('master')
@section("content")
<!--Ovo mozemo videti na stranici tek kada napravimo rutu -> routes-web.php -->
<div class ="container"> 
    <div class = "row">
        <!-- U prvi blok cemo postaviti slike -->
        <div class = "col-sm-6">
            <img class = "opis-slike" src = "{{$product['slika']}}" alt="">
        </div> 
        <!-- U drugi blok cemo postaviti detalje -->
        <div class = "col-sm-6">
            <a href = "/"> Nazad </a> 
            <h2>Naziv : {{$product['naziv']}}</h2>
            <h3>Cena: {{$product['cena']}} </h3>
            <h4>Opis: {{$product['karakteristike']}} </h4>
            <h4>Šifra: {{$product['sifra']}} </h4>
 
            <br> <br>
 
            <form action = "/dodaj_u_korpu" method = "POST">
                @csrf
                <input type="hidden" name = "product_id" value = "{{$product['id']}}">
                <button class = "prvo-dugme"> DODAJ U KORPU</button>
            </form>

            <br><br>
            <button class = "drugo-dugme"> KUPI</button>
            <br><br>
        </div>
    </div>
</div>
@endsection