<?php

namespace Database\Seeders;

use App\Models\OperationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OperationType::query()->insert([
            [
                OperationType::FIELD_NAME => 'Ведение поезда по перегону'
            ],
            [
                OperationType::FIELD_NAME => 'Движение локомотива резервом по перегону'
            ],
            [
                OperationType::FIELD_NAME => 'Подача вагонов'
            ],
            [
                OperationType::FIELD_NAME => 'Перестановка вагонов'
            ],
            [
                OperationType::FIELD_NAME => 'Уборка вагонов'
            ],
            [
                OperationType::FIELD_NAME => 'Замена неисправного локомотива (депо)'
            ],
            [
                OperationType::FIELD_NAME => 'Ремонт подвижного состава'
            ],
            [
                OperationType::FIELD_NAME => 'Погрузка'
            ],
            [
                OperationType::FIELD_NAME => 'Выгрузка'
            ]
        ]);
    }
}
