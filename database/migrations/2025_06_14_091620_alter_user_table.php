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
        // alter table users
        Schema::table('users', function (Blueprint $table) {
            // column type string dengan max char 80, unique untuk tiap data, kemudian tambahkan field setelah field email
            $table->string('username',80)->unique()->after("email");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
