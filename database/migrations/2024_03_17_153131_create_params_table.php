<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('params', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->default("ShalomFinance");
            $table->string("slogan")->default("The responsible bank");
            $table->string("logo")->nullable();
            $table->string("url")->default("http://127.0.0.1:8000/");
            $table->string("defaultCurrency")->default("€");
            $table->string("defaultLanguage")->default("francais");
            $table->string("token")->default("zeRfvghyUiOiuytrEdfghjklKIUytreZsdfgHJUIkjhgfDEsdfghjkJHGFr");

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
        Schema::dropIfExists('params');
    }
};
