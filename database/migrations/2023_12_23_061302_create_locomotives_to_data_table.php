<?php

use App\Models\Locomotive;
use App\Models\LocomotiveToData;
use App\Models\StationData;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(LocomotiveToData::TABLE_NAME, function (Blueprint $table) {
            $table->bigInteger(LocomotiveToData::FIELD_ID)->autoIncrement();
            $table->foreignIdFor(StationData::class, LocomotiveToData::FIELD_DATA_ID);
            $table->foreignIdFor(Locomotive::class, LocomotiveToData::FIELD_LOCOMOTIVE_ID);
            $table->string(LocomotiveToData::FIELD_DIRECTION);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(LocomotiveToData::TABLE_NAME);
    }
};
