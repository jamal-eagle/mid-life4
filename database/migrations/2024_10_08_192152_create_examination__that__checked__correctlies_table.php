<?php
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Examination;
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
        Schema::create('examination__that__checked__correctlies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdfor(Examination::class,'examination_id');
            $table->foreignIdfor(Doctor::class,'doctor_id');
            $table->foreignIdfor(Patient::class,'patient_id');
            $table->date('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examination__that__checked__correctlies');
    }
};
