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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();

            $table->string('status');

            // $table->foreignId('user_id')
            //     ->constrained('users', 'id')
            //     ->onDelete('cascade');
            // $table->text('details_of_equipment_damage');
            
            // // pengadu (borang - a)
            // model : Complainant
            // $table->string('department_name');
            // $table->string('complaint_location');
            // $table->date('complaint_date');
            // $table->text('signature');
            // $table->string('name_of_signature');
            // $table->string('date_of_signature');

            // // pengadu (borang - b)
            // model : Complainant
            // $table->string('department_name');
            // $table->string('complaint_location');
            // $table->date('complaint_date');
            // $table->text('signature');
            // $table->string('name_of_signature');
            // $table->string('date_of_signature');

            // // tindakan pegawai aset jabatan/unit/penolong jurutera - actions of department/unit/assistant engineer asset officer
            // model : DepartmentAssetOfficerRespons
            // $table->string('asset_type');
            // $table->string('asset_description');
            // $table->string('registration_serial_number');
            // $table->decimal('previous_maintenance_cost', 10, 2);
            // $table->string('end_user');
            // $table->date('damage_date');
            // $table->text('damage_description');
            // $table->text('note');
            // $table->text('signature');
            // $table->string('name_of_signature');
            // $table->string('date_of_signature');
            // $table->boolean('damage_category_a')->default(false);
            // $table->boolean('damage_category_b')->default(false);
            // $table->boolean('damage_category_c')->default(false);
            // $table->boolean('damage_category_d')->default(false);

            // // tindakan penolong jurutera - assistant engineer action
            // model : AssistantEngineerResponse
            // $table->date('date_checked');
            // $table->text('review');
            // $table->text('signature');
            // $table->string('name_of_signature');
            // $table->string('date_of_signature');

            // // pengesahan pegawai pembagunan/ppp/ketua unit - tracking of development officer/ppp/head of unit
            // model : DevelopmentOfficerConfirmation
            // $table->text('signature');
            // $table->string('name_of_signature');
            // $table->string('date_of_signature');

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
        Schema::dropIfExists('complaints');
    }
};
