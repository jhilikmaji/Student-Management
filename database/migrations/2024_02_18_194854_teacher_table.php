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
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('subject');
        $table->string('phoneNumber');
        $table->date('dob')->nullable();
        $table->string('teacher_id')->nullable();
        $table->string('gender');
        $table->string('address');
        // $table->dateTime('created_at');
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};