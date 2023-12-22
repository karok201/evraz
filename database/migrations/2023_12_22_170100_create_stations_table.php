<?php

use App\Models\Station;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Station::TABLE_NAME, function (Blueprint $table) {
            $table->integer(Station::FIELD_ID)->autoIncrement()->comment('Station ID');
            $table->string(Station::FIELD_NAME)->comment('Station Name');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Station::TABLE_NAME);
    }
};
