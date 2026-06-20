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
        Schema::table('parties', function (Blueprint $table) {
            if (!Schema::hasColumn('parties', 'zip_code')) {
                $table->string('zip_code')->nullable()->after('ifsc_code');
            }

            if (!Schema::hasColumn('parties', 'state')) {
                $table->string('state')->nullable()->after('zip_code');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parties', function (Blueprint $table) {
            if (Schema::hasColumn('parties', 'state')) {
                $table->dropColumn('state');
            }

            if (Schema::hasColumn('parties', 'zip_code')) {
                $table->dropColumn('zip_code');
            }
        });
    }
};
