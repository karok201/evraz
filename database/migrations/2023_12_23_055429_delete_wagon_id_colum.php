<?php

use App\Models\Station;
use App\Models\User;
use App\Models\Wagon;
use App\Models\WagonToStation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table(WagonToStation::TABLE_NAME, function (Blueprint $table) {
            $table->dropColumn([
                WagonToStation::FIELD_WAGON_ID
            ]);
        });
    }

    public function down(): void
    {
        Schema::table(User::TABLE_NAME, function (Blueprint $table) {
            $table->foreignIdFor(Wagon::class, WagonToStation::FIELD_WAGON_ID)->comment('Wagon ID');
        });
    }
};
