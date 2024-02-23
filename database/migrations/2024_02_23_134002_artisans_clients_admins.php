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
        //
        DB::statement('
            CREATE TABLE clients (
                user_id INT PRIMARY KEY,
                FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
            ) INHERITS (users)
        ');

        DB::statement('
            CREATE TABLE artisans (
                pictures JSONB,
                user_id INT PRIMARY KEY,
                FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
            ) INHERITS (users)
        ');

        DB::statement('
        CREATE TABLE admins (
            user_id INT PRIMARY KEY,
            FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
        ) INHERITS (users)
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        DB::statement('DROP TABLE clients, artisans, admins');
    }
};
