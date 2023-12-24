<?php

use App\Models\Owner;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table(Owner::TABLE_NAME, function (Blueprint $table) {
            $table->string(Owner::FIELD_COLOR);
        });
    }

    public function down(): void
    {
        Schema::table(Owner::TABLE_NAME, function (Blueprint $table) {
            $table->dropColumn(Owner::FIELD_COLOR);
        });
    }
};
