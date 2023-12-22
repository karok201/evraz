<?php

use App\Models\Park;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Park::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements(Park::FIELD_ID)->autoIncrement()->comment('Park ID');
            $table->string(Park::FIELD_NAME)->comment('Park Name');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Park::TABLE_NAME);
    }
};
