<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255);
            $table->string('telephone', 20);
            $table->string('email_address', 255)->unique();
            $table->string('website', 255)->unique();
            $table->string('owner', 255);
            $table->boolean('bookable_for_events')->default(false);

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
        Schema::dropIfExists('venues');
    }
}
