<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\News;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        News::insert([
            'title' => 'default',
            'name' => 'default',
            'file_path' => 'default',
            'type' => 'public',
            'status' => false,
        ]);

        News::insert([
            'title' => 'default',
            'name' => 'default',
            'file_path' => 'default',
            'type' => 'member-only',
            'status' => false,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
