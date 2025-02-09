<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('priority')->default(999); // Default to a lower priority
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_categories');
    }
};
