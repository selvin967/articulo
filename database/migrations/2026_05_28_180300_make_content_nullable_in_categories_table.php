<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Use raw statement to avoid requiring doctrine/dbal for this simple change
        DB::statement('ALTER TABLE categories MODIFY content TEXT NULL;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE categories MODIFY content TEXT NOT NULL;');
    }
};
