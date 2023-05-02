<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('categories');
        });
    }

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
