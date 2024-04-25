<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("type_id");
            $table->string("description");
            $table->date("date");
            $table->enum("salle" , ["theatre1" , "theatre2" , "conference1"]);
            $table->unsignedInteger("nombres_max_places")->default(50);
            $table->foreign("type_id")->references("id")->on("types");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
