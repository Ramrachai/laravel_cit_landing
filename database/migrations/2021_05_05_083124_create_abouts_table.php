<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('about.jpg');
            $table->string('title')->default('This is default title');
            $table->longText('description')->default('Taciti bibendum ridiculus perferendis! Fusce commodi ante aperiam voluptates. Unde gravida eligendi perspiciatis eum aute eros netus fusce. Cupiditate accusantium? Accusantium numquam ipsum ante, inventore non conubia massa,');
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
        Schema::dropIfExists('abouts');
    }
}
