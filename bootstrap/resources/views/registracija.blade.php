


@extends('master')
@section("content")
<!--Ovo mozemo videti na stranici tek kada napravimo rutu -> routes-web.php -->
<div class ="container custom-login"> 
    <div class="row">
        <div class ="col-sm-4 | col-sm-offset-4">
            <form action = "registracija" method = "POST">
            @csrf
            <div class="form-group">
                    <label for="exampleInputEmail1">Korisničko ime</label>
                    <input type="text" name = "name" class="form-control" id="exampleInputEmail1" placeholder="Korisničko ime">
                </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Email adresa</label>
                    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Lozinka</label>
                    <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Lozinka">
                </div>
            <button type="submit" class="btn btn-default">Registruj se</button>
            </form>
            </div>  
    </div>

</div>
@endsection