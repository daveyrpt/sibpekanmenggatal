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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->cascadeOnDelete();
            $table->string('fullname')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('age')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->string('member_type')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('family')->nullable();
            $table->string('member_code')->nullable();
            $table->string('original_church')->nullable();
            $table->string('baptize_date')->nullable();
            $table->string('begin_year')->nullable();
            $table->string('original_profile_img')->nullable();
            $table->string('profile_img')->nullable();
            $table->foreignId('manage_by')->nullable()->references('id')->on('users')->cascadeOnDelete();
            $table->string('relationship')->nullable();
            $table->timestamps();
        });

        $admin = DB::table('users')->where('role', 'admin')->first();

        DB::table('user_profiles')->insert([
            'user_id' => $admin->id,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
