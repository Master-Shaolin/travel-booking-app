<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('slug')->unique();
            $table->decimal('price');
            $table->integer('max_people');
            $table->string('country',50);
            $table->string('city',30);
            $table->string('thumbnail')->nullable();
            $table->string('photos')->nullable();
            $table->json('language');
            $table->integer('duration');
            $table->json('included')->nullable();
            $table->boolean('accessibility');
            $table->boolean('pets');
            $table->float('rating',10,1)->nullable();
            $table->json('meeting_point')->nullable();
            $table->boolean('active');
            $table->boolean('featured');
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
        Schema::dropIfExists('activities');
    }
}
