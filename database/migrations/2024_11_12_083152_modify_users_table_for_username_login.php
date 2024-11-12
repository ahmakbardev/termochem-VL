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
        Schema::table('users', function (Blueprint $table) {
            // Remove the email column if it's not needed for username-based login
            $table->dropUnique(['email']);
            $table->dropColumn('email');

            // Add the username column and make it unique
            $table->string('username')->unique()->after('name');

            // Make other fields nullable if not required
            $table->timestamp('email_verified_at')->nullable()->change();
            $table->string('password')->nullable()->change();
            $table->rememberToken()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Re-add the email column
            $table->string('email')->unique()->after('name');

            // Drop the username column
            $table->dropColumn('username');

            // Revert nullable fields
            $table->timestamp('email_verified_at')->nullable(false)->change();
            $table->string('password')->nullable(false)->change();
            $table->rememberToken()->nullable(false)->change();
        });
    }
};
