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
        Schema::create('government_movable_asset_damage_reports', function (Blueprint $table) {
            $table->id();

            $table->string('department_name');
            $table->string('location');
            $table->date('date');
            $table->text('signature');
            $table->string('name_of_signature');
            $table->string('date_of_signature');
            
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
        Schema::dropIfExists('government_movable_asset_damage_reports');
    }
};
