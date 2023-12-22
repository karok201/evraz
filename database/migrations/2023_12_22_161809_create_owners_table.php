<?php

use App\Models\Owner;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Owner::TABLE_NAME, function (Blueprint $table) {
            $table->smallInteger(Owner::FIELD_ID)->autoIncrement()->comment('Owner ID');
            $table->string(Owner::FIELD_NAME)->comment('Owner Name');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Owner::TABLE_NAME);
    }
};
