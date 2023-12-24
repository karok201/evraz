<?php

namespace Database\Seeders;

use App\Models\Reason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reason::query()->insert([
            [
                Reason::FIELD_NAME => 'Формирование подачи под выгрузку'
            ],
            [
                Reason::FIELD_NAME => 'Подбор по характеристикам вагонов'
            ],
            [
                Reason::FIELD_NAME => 'Формирование маршрута'
            ],
            [
                Reason::FIELD_NAME => 'Выработка больных вагонов'
            ],
            [
                Reason::FIELD_NAME => 'Выработка грязных вагонов'
            ],
            [
                Reason::FIELD_NAME => 'Выравнивание шапок'
            ],
            [
                Reason::FIELD_NAME => 'Подбор по собственникам'
            ],
            [
                Reason::FIELD_NAME => 'Формирование порожняка на отправление'
            ],
            [
                Reason::FIELD_NAME => 'Подбор вагонов по качеству загруженного угля'
            ],
            [
                Reason::FIELD_NAME => 'Переформирование маршрута'
            ],
            [
                Reason::FIELD_NAME => 'Подбор инновационных вагонов'
            ]
        ]);
    }
}
