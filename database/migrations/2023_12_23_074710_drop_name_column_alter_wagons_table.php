<?php

use App\Models\Locomotive;
use App\Models\LocomotiveToData;
use App\Models\StationData;
use App\Models\Wagon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table(Wagon::TABLE_NAME, function (Blueprint $table) {
            $table->dropColumn(Wagon::FILED_NAME);
        });
    }

    public function down(): void
    {
        Schema::table(Wagon::TABLE_NAME, function (Blueprint $table) {
            $table->string(Wagon::FILED_NAME);
        });
    }
};
