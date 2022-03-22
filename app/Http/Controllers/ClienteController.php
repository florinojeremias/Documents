<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Fornecedor;
use Facade\FlareClient\Http\Client;
use App\Models\Salario;


class ClienteController extends Controller
{
    //

    public function index(){
      
        $cliente=Cliente::groupby('co_cliente')->paginate(10);       
        $fornecedor =Fornecedor::paginate(10);
        return view('comercial', compact('cliente','fornecedor'));
    }
    
    public function relatorio($id, $data){
        $mes=strtotime($data);
        $month=date('m',$mes);
        $receita_liquida=Cliente::where('co_cliente',$id)->whereMonth('data_emissao',$month)->sum('valor');
        $custo_fixo=Salario::select('brut_salario')->where('co_cliente',$id)->where('brut_salario','!=',0)->first();

       $relatorio=[
           'receita_liquida'=>$receita_liquida,
           'custo_fixo'=>$custo_fixo
       ];
        $this->index();

        return view('cliente_relatorio',compact('relatorio'));

    }

    public function grafico(Request $request){

    }

    public function pizza(){

    }
}
