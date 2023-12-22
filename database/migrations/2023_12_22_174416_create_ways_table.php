<?php

use App\Models\Way;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Way::TABLE_NAME, function (Blueprint $table) {
            $table->bigInteger(Way::FIELD_ID)->autoIncrement()->comment('Way ID');
            $table->string(Way::FIELD_NAME)->comment('Way Name');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Way::TABLE_NAME);
    }
};
