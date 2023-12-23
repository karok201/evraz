<?php

use App\Models\StationData;
use App\Models\Wagon;
use App\Models\WagonToData;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(WagonToData::TABLE_NAME, function (Blueprint $table) {
            $table->bigInteger(WagonToData::FIELD_ID)->autoIncrement();
            $table->foreignIdFor(Wagon::class, WagonToData::FIELD_WAGON_ID);
            $table->foreignIdFor(StationData::class, WagonToData::FIELD_DATA_ID);
            $table->integer(WagonToData::FIELD_IDLE_DAYS_LENGTH);
            $table->string(WagonToData::FIELD_STATE);
            $table->string(WagonToData::FIELD_CARGO);
            $table->integer(WagonToData::FIELD_POSITION);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(WagonToData::TABLE_NAME);
    }
};
