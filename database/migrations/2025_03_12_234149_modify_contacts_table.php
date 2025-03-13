<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            // ✅ Remove unwanted columns
            $table->dropColumn(['name', 'email', 'subject', 'message']);

            // ✅ Add only the necessary columns if they do not exist
            if (!Schema::hasColumn('contacts', 'facebook')) {
                $table->string('facebook')->nullable()->after('id');
            }
            if (!Schema::hasColumn('contacts', 'instagram')) {
                $table->string('instagram')->nullable()->after('facebook');
            }
            if (!Schema::hasColumn('contacts', 'phone')) {
                $table->string('phone')->nullable()->after('instagram');
            }
        });
    }

    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            // ✅ Re-add the removed columns in case of rollback
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
        });
    }
};
