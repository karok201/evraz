<?php

use App\Models\Owner;
use App\Models\Wagon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Wagon::TABLE_NAME, function (Blueprint $table) {
            $table->bigInteger(Wagon::FIELD_ID)->autoIncrement()->comment('Wagon ID');
            $table->string(Wagon::FILED_NAME)->comment('Wagon Name');
            $table->boolean(Wagon::FIELD_IS_SICK)->comment('Is Wagon sick');
            $table->boolean(Wagon::FIELD_IS_WITH_HATCH)->comment('Is Wagon with Hatch');
            $table->float(Wagon::FIELD_LOAD_CAPACITY)->comment('Wagon load Capacity');
            $table->integer(Wagon::FIELD_DAYS_TO_REPAIR)->comment('Wagon Days to Repair');
            $table->integer(Wagon::FIELD_KILOMETERS_LEFT)->comment('Wagon Kilometers left');
            $table->boolean(Wagon::FIELD_IS_DIRTY)->comment('Is Wagon dirty');
            $table->string(Wagon::FIELD_FIRST_NOTE)->comment('First Wagon Note');
            $table->string(Wagon::FIELD_SECOND_NOTE)->comment('Second Wagon Note');

            $table->timestamps();

            $table->foreignIdFor(Owner::class, Wagon::FIELD_OWNER_ID);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Wagon::TABLE_NAME);
    }
};
