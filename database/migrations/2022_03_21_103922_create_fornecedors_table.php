<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFornecedorsTable extends Migration
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
        return "CREATE view fornecedor 
        as select  cao_usuario.co_usuario,no_usuario,co_tipo_usuario
         from cao_usuario inner join permissao_sistema where permissao_sistema.co_sistema =1 and permissao_sistema.in_ativo='S' and permissao_sistema.co_tipo_usuario between 0 and 2";
    }

    private function dropView():string{
        return "DROP    view `fornecedor`";
    }
}
