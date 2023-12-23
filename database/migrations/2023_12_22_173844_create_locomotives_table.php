<?php

use App\Models\Locomotive;
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
        Schema::create(Locomotive::TABLE_NAME, function (Blueprint $table) {
            $table->bigInteger(Locomotive::FIELD_ID)->autoIncrement()->comment('Locomotive ID');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Locomotive::TABLE_NAME);
    }
};
