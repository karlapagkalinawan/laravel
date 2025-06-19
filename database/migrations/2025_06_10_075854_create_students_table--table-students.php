<?php

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
        Schema::create('students', function (Blueprint $table){
            $table->id();
            $table->string('fname', 100);
            $table->string('lname', 100);
            $table->string('email', 100);
            $table->string('gender',['Male', 'Famale']) -> nullable();
            $table->date('birthdate') -> nullable();
            $table->string('contact_number') -> nullable();
            $table->string('complete_address')->nullable ();
            $table->timestamps('bio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema:: dropIfExists('students');
    }
};
