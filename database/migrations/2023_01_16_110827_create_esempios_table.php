<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('esempios', function (Blueprint $table) {
            $table->id();

            $table->text('testo');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('esempios');
    }
};