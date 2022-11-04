<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('slug')->unique();
            $table->string('legal_representative');
            $table->string('email')->unique();
            $table->string('phone',20);
            $table->string('country',50);
            $table->string('city',30);
            $table->string('address');
            $table->json('photos')->nullable();
            $table->float('rating',10,1)->nullable();
            $table->boolean('active');
            $table->boolean('featured');
            $table->foreignId('hotel_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('hotels');
    }
}
