<?php

use App\Models\Station;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table(User::TABLE_NAME, function (Blueprint $table) {
            $table->dropColumn([
                User::FIELD_IS_ADMIN,
                User::FIELD_STATION_ID
            ]);
        });
    }

    public function down(): void
    {
        Schema::table(User::TABLE_NAME, function (Blueprint $table) {
            $table->boolean(User::FIELD_IS_ADMIN)->comment('Is User Admin');
            $table->foreignIdFor(Station::class, User::FIELD_STATION_ID)->comment('User Station ID');
        });
    }
};
