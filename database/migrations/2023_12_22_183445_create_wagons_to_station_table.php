<?php

use App\Models\Park;
use App\Models\Station;
use App\Models\Wagon;
use App\Models\WagonToStation;
use App\Models\Way;
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
        Schema::create(WagonToStation::TABLE_NAME, function (Blueprint $table) {
            $table->bigInteger(WagonToStation::FIELD_ID)->autoIncrement()->comment('ID');
            $table->foreignIdFor(Station::class, WagonToStation::FIELD_STATION_ID)->comment('Station ID');
            $table->foreignIdFor(Wagon::class, WagonToStation::FIELD_WAGON_ID)->comment('Wagon ID');
            $table->foreignIdFor(Way::class, WagonToStation::FIELD_WAY_ID)->comment('Way ID');
            $table->foreignIdFor(Park::class, WagonToStation::FIELD_PARK_ID)->comment('Park ID');
            $table->integer(WagonToStation::FIELD_IDLE_DAYS_LENGTH)->comment('Wagon Idle Days Length');
            $table->string(WagonToStation::FIELD_STATE)->comment('State');
            $table->string(WagonToStation::FIELD_CARGO)->comment('Cargo');
            $table->smallInteger(WagonToStation::FIELD_POSITION)->comment('Wagon Position');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(WagonToStation::TABLE_NAME);
    }
};
