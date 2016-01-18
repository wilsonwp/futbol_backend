<<<<<<< HEAD
?php
=======
<?php
>>>>>>> c3ad6474361fdf1b1ded0e804a19bdd60792b632

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJornadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornadas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->integer('campeonato_id');
            $table->date('fecha');
            $table->timestamps();
            $table->foreign('campeonato_id')
            ->references('id')->on('campeonatos')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jornadas');
    }
}
