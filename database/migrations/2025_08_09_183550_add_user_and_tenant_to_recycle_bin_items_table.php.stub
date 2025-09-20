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
        Schema::table('recycle_bin_items', function (Blueprint $table) {
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->unsignedBigInteger('tenant_id')->nullable();

            $table->index('deleted_by');
            $table->index('tenant_id');
            $table->index('deleted_at');

            $table->unique(['model_type', 'model_id'], 'unique_model_in_recycle_bin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recycle_bin_items', function (Blueprint $table) {
            $table->dropUnique('unique_model_in_recycle_bin');

            $table->dropIndex(['deleted_by']);
            $table->dropIndex(['tenant_id']);
            $table->dropIndex(['deleted_at']);

            $table->dropColumn(['deleted_by', 'tenant_id']);
        });
    }
};
