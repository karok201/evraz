<?php

use App\Models\Operation;
use App\Models\Reason;
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
        Schema::table(Operation::TABLE_NAME, function (Blueprint $table) {
            $table->foreignIdFor(Reason::class, Operation::FIELD_REASON_ID);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(Operation::TABLE_NAME, function (Blueprint $table) {
            $table->dropColumn(Operation::FIELD_REASON_ID);
        });
    }
};
