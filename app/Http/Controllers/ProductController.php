<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Korpa;
use App\Models\Porudzbina;
use App\Models\User;
use App\Models\Prikaz;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;  //Moramo uvesti kako bismo mogli da koristimo fju JOIN, da spajamo tabele
use Session;


class ProductController extends Controller
{
    function index(){
 
        $data = Product::all();
       return view('product', ['products'=>$data]);    
    }


    function opis($id){

       $data = Product::find($id);
       return view('opis', ['product'=>$data]);
    }
    //podaci su niz sa parovima kljuc/vrednost, mozete pristupiti svakoj vrednosti u okviru ovog prikaza
    //koristeci kljuceve podataka

    //Ovom funkcijom prilikom pretrazivanja u polju dobijamo sve informacije o proizvodu
    function pretraga(Request $req){

    $data = Product::where('naziv', 'like', '%'.$req->input('query').'%')->get();

    return view('pretraga', ['products'=>$data]);
    }

    //Funkcija za dodavanje proizvoda u korpu
    function dodajUKorpu(Request $req){

    //Postavljamo uslov da je korisnik prethodno ulogovan. Ukoliko nije, ide na login stranu da se uloguje
    if($req->session()->has('user'))    { //ako je korisnik ulogovan
        
        $korpa = new Korpa;
        $korpa->korisnik_id=$req->session()->get('user')['id'];
        $korpa->proizvod_id=$req->product_id;
        $korpa->save();
        return redirect('/'); //globalni pomocnik za preusmerenje
    }
    else{
        return redirect('/login');

    }
    }

    static function korpaStavka(){

        $userId = Session::get('user')['id'];
        return Korpa::where('korisnik_id', $userId)->count();

    }

    function korpaLista(){

        $userId = Session::get('user')['id'];
        $products = DB::table('korpa')
        ->join('products', 'korpa.proizvod_id', '=', 'products.id')
        ->where('korpa.korisnik_id', $userId)
        ->select('products.*', 'korpa.id as korpa_id')
        ->get();

        return view('korpaLista',['products'=>$products]);
    }

    function ukloniIzKorpe($id){


        Korpa::destroy($id);
        return redirect('/korpaLista');

    }

//orderNow
    function naruciProizvod(){

        $userId = Session::get('user')['id'];
        $ukupno = $products = DB::table('korpa')
        ->join('products', 'korpa.proizvod_id', '=', 'products.id')
        ->where('korpa.korisnik_id', $userId)
        ->sum('products.cena');

        return view('naruci',['ukupno'=>$ukupno]);


    }

    /*function naruciJedanProizvod(){

        $userId = Session::get('user')['id'];
         $products = DB::table('korpa')
        ->join('products', 'korpa.proizvod_id', '=', 'products.id')
        ->where('korpa.korisnik_id', $userId)
        ->get('products.cena');

        return view('products.cena');


    }*/ 

//orderPlace
    //Za prikaz svih proizvoda koje smo narucili 
    function naruciStrana(Request $req){

        $userId = Session::get('user')['id'];
        $korpaUkupno = Korpa::where('korisnik_id', $userId)->get();
        foreach($korpaUkupno as $korpa){

            $porudzbina = new Porudzbina;
            $porudzbina->product_id=$korpa['proizvod_id'];
            $porudzbina->user_id=$korpa['korisnik_id'];
            $porudzbina->status="pending";
            $porudzbina->nacin_placanja=$req->payment;
            $porudzbina->status_placanja="pending";
            $porudzbina->adresaPosiljaoca=$req->adresa;
            $porudzbina->brtelefona=$req->brtelefona;   //ovo sam dodala
            $porudzbina->save();
            //Korpa::where('korisnik_id', $userId)->delete();
           
        }
       //  return $req->input();
        return redirect('/');
    }

    function mojePorudzbine(){
        $data=Porudzbina::all();
        return view('mojeporudzbine',['porudzbina'=>$data]);
    }

    #FUNKCIJE ZA API

    function listaProizvoda(){

        return Product::all();

    }


    function listaProizvodaID($id=null){

        return $id?Product::find($id):Product::all(); //id je opcioni

    }

 
    function dodajProizvod(Request $req){

      /*  $proizvod = Product::make($request->all(), [
            'sifra'=>'required',
            'naziv'=>'required|min:2',
            'karakteristike'=>'required|min:2',
            'cena'=>'required',
            'slika'=>'required|min:2',
           
        ]);*/
        $proizvod = new Product;
        $proizvod->sifra=$req->sifra;
        $proizvod->naziv=$req->naziv;
        $proizvod->karakteristike=$req->karakteristike;
        $proizvod->cena=$req->cena;
        $proizvod->slika=$req->slika;
        $result=$proizvod->save();
        if($result){

            return ["result"=>"Podaci su sacuvani"];
        }

        else{

        return ["result"=>"Podaci nisu sacuvani"];
    }}


    function izbrisiProizvod($id){


        $proizvod=Product::find($id);
        $result=$proizvod->delete();
        if($result){
            return ["result"=>"Podaci su izbrisani", $id];

        }
        else{
        return ["result"=>"Niste uspeli da izbrisete podatke", $id];
    }
}}
