<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shop</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
<!--jQuery koji je zahtevan zbor JavaScript-a-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
{{View::make('header')}} <!-- prikazuje heder  -->
@yield('content')        <!-- vraca ga na login content i nastavlja tamo sa izvrsenjem  -->

<!-- {{View::make('footer')}}  -->

 
</body>

<style> 

.custom-login{
    height: 500px;
    padding-top: 150px;
}

img.slider-img{
    height: 400px !important
}

.custom-product{
    height: 700px;
}
 
.slider-text{
   color: #F52887 !important
}

.najtrazeniji-slike{
    height: 100px;
}

.najtrazeniji-proizvod{
    float: left;
    padding-left: 60px;
    weight: 40%;
}

.najtrazeniji-proizvodi{
    margin: 30px;
}


.opis-slike{
    height: 300px;
    margin-left: 35 %;
}

.pretraga-polje{
    width: 500px !important
}

.korpa-lista{
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
    padding-left: 40px;
}

.col-sm-4{
    padding-left: 80px;
}

/*.panel-footer{

    position: relative;
    height: 70px;
    margin-top: -100px;
    clear: both;

    margin-bottom:0px;
    float: bottom;
}*/


</style>
</html>