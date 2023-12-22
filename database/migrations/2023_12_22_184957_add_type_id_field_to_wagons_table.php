<?php

use App\Models\Wagon;
use App\Models\WagonType;
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
        Schema::table(Wagon::TABLE_NAME, function (Blueprint $table) {
            $table->dropColumn(Wagon::FIELD_TYPE);
            $table->foreignIdFor(WagonType::class, Wagon::FIELD_TYPE_ID);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(Wagon::TABLE_NAME, function (Blueprint $table) {
            $table->string(Wagon::FIELD_TYPE)->comment('Wagon Type');
        });
    }
};
