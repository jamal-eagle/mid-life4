<?php

use App\Models\Blood_Donation;
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
        Schema::create('blood__donamtion__admins', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->foreignIdfor(Blood_Donation::class,'blood_donation_id');
            $table->string('image_donation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood__donamtion__admins');
    }
};
