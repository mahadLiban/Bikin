<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string("footerTitre1")->nullable();
            $table->string("footerTitre2")->nullable();
            $table->string("footerTitre3")->nullable();
            $table->string("footerTitre4")->nullable();

            $table->string("description")->nullable();
            $table->string("description2")->nullable();

            $table->string("phone")->nullable();
            $table->string("email")->nullable();

            $table->string("li1")->nullable();
            $table->string("li2")->nullable();
            $table->string("li3")->nullable();
            $table->string("li4")->nullable();
            $table->string("li5")->nullable();
            $table->string("li6")->nullable();
            $table->string("li7")->nullable();
            $table->string("li8")->nullable();
            $table->string("li9")->nullable();
            $table->string("li10")->nullable();
            
            $table->string("btnTxt")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footers');
    }
}
