<?php

use App\Models\Park;
use App\Models\Station;
use App\Models\StationData;
use App\Models\Way;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(StationData::TABLE_NAME, function (Blueprint $table) {
            $table->bigInteger(StationData::FIELD_ID)->autoIncrement();
            $table->foreignIdFor(Station::class, StationData::FIELD_STATION_ID);
            $table->foreignIdFor(Way::class, StationData::FIELD_WAY_ID);
            $table->foreignIdFor(Park::class, StationData::FIELD_PARK_ID);
            $table->integer(StationData::FIELD_MAX_CARRIAGES_COUNT);

            $table->timestamps();

            $table->unique([StationData::FIELD_WAY_ID, StationData::FIELD_PARK_ID]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(StationData::TABLE_NAME);
    }
};
