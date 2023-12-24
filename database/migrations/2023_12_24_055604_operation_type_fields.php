<?php

use App\Models\Operation;
use App\Models\OperationType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(OperationType::TABLE_NAME, function (Blueprint $table) {
            $table->smallInteger(OperationType::FIELD_ID)->autoIncrement();
            $table->string(OperationType::FIELD_NAME);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(OperationType::TABLE_NAME);
    }
};
