<?php

namespace Database\Seeders;

use App\Enums\Country\CountryEnum;
use App\Enums\Person\GenderEnum;
use App\Support\Facades\Uid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ForenameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table(table: 'forenames')->insert(values: [
            // England
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Aaron', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Adam', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Alex', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Andrew', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Andy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Ben', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Charlie', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Chris', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Christopher', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Craig', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Daniel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Danny', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'David', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'George', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Harry', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Ian', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Jack', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'James', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Jamie', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Joe', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'John', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Jonathan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Jordan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Josh', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Lee', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Lewis', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Liam', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Luke', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Mark', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Matt', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Matthew', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Michael', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Nathan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Nick', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Oliver', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Paul', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Peter', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Richard', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Robert', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Ross', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Ryan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Sam', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Scott', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Sean', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Simon', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Stephen', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Steven', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Thomas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'Tom', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::England, 'gender' => GenderEnum::Male, 'name' => 'William', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // Poland
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Adam', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Adrian', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Aleksander', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Andrzej', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Arkadiusz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Artur', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Bartłomiej', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Bartosz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Błażej', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Damian', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Daniel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Dariusz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Dawid', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Dominik', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Filip', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Grzegorz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Hubert', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Jacek', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Jakub', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Janusz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Jarosław', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Jerzy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Kacper', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Kamil', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Karol', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Konrad', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Krystian', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Krzysztof', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Łukasz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Maciej', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Marcin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Marek', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Mariusz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Mateusz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Michał', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Mikołaj', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Patryk', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Paweł', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Piotr', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Przemysław', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Radosław', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Rafał', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Robert', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Ryszard', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Sebastian', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Sławomir', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Szymon', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Tomasz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Wojciech', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => Uid::generate(), 'country' => CountryEnum::Poland, 'gender' => GenderEnum::Male, 'name' => 'Zbigniew', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
