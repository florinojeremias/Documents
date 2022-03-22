<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSalariosTable extends Migration
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

        return " CREATE view salario as select
            cao_cliente.no_razao,cao_salario.brut_salario,cao_cliente.co_cliente, cao_salario.liq_salario 
            from cao_cliente inner join cao_salario
        
        ";
    }

    private function dropView():string{
        return " DROP   VIEW salario";
    }
}
