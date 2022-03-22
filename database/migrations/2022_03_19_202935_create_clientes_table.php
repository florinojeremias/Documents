<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
           DB::statement($this->createView());
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      DB::statement($this->dropView());
    }

    private function createView():string{
        return "CREATE view cliente as
        select  cao_cliente.no_razao,cao_cliente.co_cliente,cao_fatura.valor,cao_fatura.total,cao_fatura.data_emissao from cao_cliente inner join cao_fatura where tp_cliente='A' ";
    }

    private function dropView():string{

        return " DROP VIEW IF EXISTS `cliente` ";
        
    }
}
