<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SeznamTymu;
use App\Models\Uvod;
use App\Models\Pozice;
use App\Models\ZobrazeniH;
use App\Models\typHraci;
use App\Models\Stadiony_Model;
use Config\MyConfig;
class Main extends BaseController{
    var $sezT;
    var $uv;
    var $poz;
    var $zob;
    var $typH;
    var $Config;
    var $sta;

    function __construct(){
        $this->sezT = new SeznamTymu(); 
        $this->uv = new Uvod();
        $this->poz = new Pozice();
        $this->zob = new ZobrazeniH();
        $this->typH = new typHraci();
        $this->Config = new MyConfig();
        $this->sta = new Stadiony_Model();
    }
    function index(){
        
    }
    function seznam(){
        
        
        $data['tymy'] = $this->sezT->orderBy('tymy_idtymy','nazev','rok_zalozeni','asc')->where('sezona_idsezona',1);
        $data["Propojene_Data"]=$this->sezT->join("tymy",'tymy_has_liga_sezona.tymy_idtymy=tymy.idtymy','inner')->findAll();
        echo view('Seznam_Tymu',$data);
    }

function pozice(){
    $data["data"] = $this->poz->orderBy("idpozice", "asc")->findAll();
        $data["title"] = "Pozice";
        return view('Pozice_Hracu',$data);
}
function stadiony(){
    $pagd = $this->Config->pagd;
    $data["data"] = $this->sta->orderBy('idstadion','asc')->paginate($pagd);
    $pager = $this->sta->pager;
    $data["pager"] = $pager;
    echo view('Info_Stadiony',$data);

}
public function zobrazitHrace($id) {
    $perPage = $this->Config->perPage;
    $data = ['title' => 'Hraci','data' => $this->zob->where('pozice_idpozice', $id)->where('idSezony', 1)->join('hraci', 'hraci.idHraci = hraci_v_sezone.idHrace', 'inner')->paginate($perPage),
    ];
    $pager = $this->zob->pager;
    $data["pager"] = $pager;
    return view('Zobrazeni_Hracu', $data);
}
    
    function indext(){
        echo view('Uvod_Str');
    }
    function add(){
        $data["title"] = "Vytvořené";
        echo view ('Pridat',$data);
    }
    function create()
    {
        $i = $this->request->getPost('idstadionu');
        $n = $this->request->getPost('nazev_stadionu');
        $k = $this->request->getPost('kapacita');
        $r = $this->request->getPost('rok_otevreni');

        $data = array('idstadionu' =>$i,'nazev_stadionu' => $n,
        'kapacita' => $k, 'rok_otevreni' => $r);
$this->sta->save($data);
return redirect()->route('stadiony');
    }
    function delete() {
        $idstadion = $this->request->getPost('idstadion');
        $return = $this->sta->delete($idstadion);
        return redirect()->route('stadiony');
    }
    
    public function editt(){
        $data["title"] = "Editace";
        $data ["seznam"] = $this -> sta -> orderBy('idstadion', 'asc')-> findAll();
        return view('Edit', $data);
    }
    
    public function edit($idstadion){
        $data ["seznam"] = $this -> sta ->find($idstadion);
        echo view('Edit', $data);
    }
    public function upravit() {
        $idstadion = $this -> request->getPost('idstadion');
        $nazev_stadionu = $this->request->getPost('nazev_stadionu');
        $kapacita = $this->request->getPost('kapacita');
        $rok_otevreni = $this->request->getPost('rok_otevreni');
        


        $data = array(
            'idstadion'=> $idstadion,
            'nazev_stadionu' => $nazev_stadionu,
            'kapacita' => $kapacita,
            'rok_otevreni' => $rok_otevreni,
        );
       $this->sta->save($data);
       return redirect()->route('stadiony');
    }
}


