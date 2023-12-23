<?php

use App\Models\Station;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table(Station::TABLE_NAME, function (Blueprint $table) {
            $table->string(Station::FIELD_ROLE)->comment('Station Role');
        });
    }

    public function down(): void
    {
        Schema::table(Station::TABLE_NAME, function (Blueprint $table) {
            $table->dropColumn(Station::FIELD_ROLE);
        });
    }
};
