<?php

use App\Models\WagonType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(WagonType::TABLE_NAME, function (Blueprint $table) {
            $table->smallInteger(WagonType::FIELD_ID)->autoIncrement()->comment('Wagon Type ID');
            $table->string(WagonType::FIELD_NAME)->comment('Wagon Type Name');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(WagonType::TABLE_NAME);
    }
};
