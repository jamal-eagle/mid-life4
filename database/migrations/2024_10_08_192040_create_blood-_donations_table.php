<?php
use App\Models\Patient;
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
        Schema::create('blood-_donations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdfor(Patient::class,'patient_id');
            $table->integer('amount');
            $table->boolean('blood');
            $table->string('type_of_blood');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood-_donations');
    }
};
