<?php

use App\Models\Banner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('project')->get()->count() == 0) {
            DB::table('project')->insert([
                [
                    'title' => 'Проект 1',
                    'description' => 'Описание проекта',
                ],
            ]);
        }
    }
}
