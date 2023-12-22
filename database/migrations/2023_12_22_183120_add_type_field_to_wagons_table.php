<?php

use App\Models\Wagon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table(Wagon::TABLE_NAME, function (Blueprint $table) {
            $table->string(Wagon::FIELD_TYPE)->comment('Wagon Type');
        });
    }

    public function down(): void
    {
        Schema::table(Wagon::TABLE_NAME, function (Blueprint $table) {
            $table->dropColumn(Wagon::FIELD_TYPE);
        });
    }
};
