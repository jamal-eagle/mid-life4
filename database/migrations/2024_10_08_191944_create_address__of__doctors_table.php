<?php

use App\Models\Doctor;
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
        Schema::create('address__of__doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdfor(Doctor::class,'doctor_id');
            $table->string('street');
            $table->string('city');
            $table->string('governate');
            $table->string('district');
            $table->string('sub_district');
            $table->string('community');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address__of__doctors');
    }
};
