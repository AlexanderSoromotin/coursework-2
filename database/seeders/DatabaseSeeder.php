<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bank;
use App\Models\FilesGroup;
use App\Models\LeaveType;
use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Создаём учётную запись администратора системы
        User::factory()->create([
             'name' => 'Мордвинова Алёна',
             'login' => 'mordvinova',
             'password' => '12341234',
        ]);
        User::factory()->create([
            'name' => 'Общий администратор',
            'login' => 'admin',
            'password' => '12341234',
        ]);

        // Создание групп/папок файлов
        FilesGroup::factory()->create([
             'name' => 'Личные документы',
        ]);
        FilesGroup::factory()->create([
            'name' => 'Сертификаты и дипломы',
        ]);
        FilesGroup::factory()->create([
            'name' => 'Изображения',
        ]);

        // Создание должностей
        Position::factory()->create([
            'name' => 'Тренер по фитнесу',
        ]);
        Position::factory()->create([
            'name' => 'Массажист',
        ]);
        Position::factory()->create([
            'name' => 'Администратор фитнес-центра',
        ]);
        Position::factory()->create([
            'name' => 'Уборщик',
        ]);
        Position::factory()->create([
            'name' => 'Менеджер по персоналу',
        ]);


        LeaveType::factory()->create([
            'name' => 'Болезнь',
        ]);
        LeaveType::factory()->create([
            'name' => 'Отпуск',
        ]);
        LeaveType::factory()->create([
            'name' => 'Повышение квалификации',
        ]);
        LeaveType::factory()->create([
            'name' => 'Другое',
        ]);


        Bank::factory()->create([
            'name' => 'Сбербанк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'ВТБ Банк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Газпромбанк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Альфа-Банк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Росбанк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'ЮниКредит Банк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Райффайзенбанк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Совкомбанк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Тинькофф Банк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Хоум Кредит Банк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Банк Открытие',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Ренессанс Кредит',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Банк Москвы',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Промсвязьбанк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Россельхозбанк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Банк Уралсиб',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Банк Зенит',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Ак Барс Банк',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Банк Восточный',
            'bik' => '123456789'
        ]);
        Bank::factory()->create([
            'name' => 'Банк Санкт-Петербург',
            'bik' => '123456789'
        ]);
    }
}
