<?php

use App\Models\Reason;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Reason::TABLE_NAME, function (Blueprint $table) {
            $table->smallInteger(Reason::FIELD_ID)->autoIncrement();
            $table->string(Reason::FIELD_NAME);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Reason::TABLE_NAME);
    }
};
