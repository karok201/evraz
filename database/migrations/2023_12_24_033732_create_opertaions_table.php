<?php

use App\Models\Operation;
use App\Models\OperationType;
use App\Models\Park;
use App\Models\Station;
use App\Models\Way;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Operation::TABLE_NAME, function (Blueprint $table) {
            $table->bigInteger(Operation::FIELD_ID)->autoIncrement();
            $table->timestamp(Operation::FIELD_START_DATE);
            $table->timestamp(Operation::FIELD_END_DATE);
            $table->foreignIdFor(Station::class, Operation::FIELD_DEPARTURE_STATION_ID);
            $table->foreignIdFor(Park::class, Operation::FIELD_DEPARTURE_PARK_ID);
            $table->foreignIdFor(Way::class, Operation::FIELD_DEPARTURE_WAY_ID);
            $table->foreignIdFor(Station::class, Operation::FIELD_DESTINATION_STATION_ID);
            $table->foreignIdFor(Park::class, Operation::FIELD_DESTINATION_PARK_ID);
            $table->foreignIdFor(Way::class, Operation::FIELD_DESTINATION_WAY_ID);
            $table->string(Operation::FIELD_STATUS);
            $table->string(Operation::FIELD_SUPPLY_DIRECTION);
            $table->foreignIdFor(OperationType::class, Operation::FIELD_OPERATION_TYPE_ID);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Operation::TABLE_NAME);
    }
};
