<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Univ;
use App\Sport;
use App\Logement;
use App\Transport;
use App\Sante;
use App\Revenu_gn;
use App\Loisir;
use App\Commercial;
use Illuminate\Support\Facades\Input;
use Session;
use App\Functions;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    
    
    
    public function categorie()
    {
        return view('category');
    }
    
    
    public function form()
    {
        $sport=Sport::all();
        $uniques = array();
        foreach ($sport as $c) {
            $uniques[$c->type] = $c;
        }
        
        
        
        return view('form',array('sport'=>$uniques));
    }
    
    public function map()
    {
        return view('map');
    }
    
    
    public function recommande(){
        var_dump(Input::get());
        $option=Input::get();
        $result=array();
        
        $place=array();
        
        $crous=$option['house'];
        $trans=$option['trans'];
        $school=$option['school'];
        $sport1=$option['sport1'];
        $sport2=$option['sport2'];
        $loisir1=$option['loisir1'];
        $loisir2=$option['loisir2'];
        $loisir3=$option['loisir3'];
        
        
        $school=Univ::where('nom','=',$school)->first();
        
        $result[]=$school->toArray();
        
        var_dump($crous);
        
        
            
        switch ($trans) {
            case 'car':
                
                break;
                case 'trans':
                $t=Transport::where('type','=','STAN')->get();
                $result[]=Functions::nearest($t->toArray(),$school->toArray());
                
                break;
            case 'bike':
                $t=Transport::where('type','=','VELO')->get();
                $result[]=Functions::nearest($t->toArray(),$school->toArray());
                break;
            case 'walk':
                $t=Transport::where('type','=','STAN')->get();
                $result[]=Functions::nearest($t->toArray(),$school->toArray());
                break;
            
            default:
                # code...
                break;
        }
            
            
        
        
        
        
        if($sport1!='Vide'){
            $t=Sport::where('type','LIKE',$sport1)->get();
            $result[]=Functions::nearest($t->toArray(),$school->toArray());
            
        }
        if($sport2!='Vide'){
            $t=Sport::where('type','LIKE',$sport2)->get();
            $result[]=Functions::nearest($t->toArray(),$school->toArray());
        }
        
        
        if($loisir1!='Vide'){
            $t=Loisir::where('type','LIKE',strtoupper ($loisir1))->get();
            $result[]=Functions::nearest($t->toArray(),$school->toArray());
        }
        if($loisir2!='Vide'){
            $t=Loisir::where('type','LIKE',strtoupper ($loisir2))->get();
            $result[]=Functions::nearest($t->toArray(),$school->toArray());
        }
        if($loisir3!='Vide'){
            $t=Loisir::where('type','LIKE',strtoupper ($loisir3))->get();
            $result[]=Functions::nearest($t->toArray(),$school->toArray());
        }
        
        
        
        $avg=Functions::average_point($result);
        
        if($crous=='true'){    
            $t=Logement::where('type','=','ResidenceU')->get();
            $result[]=Functions::nearest($t->toArray(),$avg);
        }
        
        var_dump($avg);
        
        
        var_dump(json_encode(array('center'=>$avg,'places'=>$result)));
        
        
        
        
        
        
        
        
        
        
        
        //Session::put('recommandation',$result);
        
    }
    
    
    
    
    
    
    
    
    
    
    
     public function autouniv()
    {
        $univ=Univ::where('nom','LIKE','%'.$_GET['term'].'%')->get();
        $toJSON = array();
        foreach($univ as $num => $val){
            $toJSON[$num]['value'] = $val->nom;
            $toJSON[$num]['label'] = $val->nom;
        }
        echo json_encode($toJSON);
        
        
        
    }
}