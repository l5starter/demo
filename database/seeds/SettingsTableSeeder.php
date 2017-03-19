<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'setting_key' => 'headerTitleText',
                'setting_value' => 'Laravel 5 Starter',
            ], [
                'setting_key' => 'dateFormat',
                'setting_value' => 'd/m/Y',
            ], [
                'setting_key' => 'resultsPerPage',
                'setting_value' => '15',
            ],
        ]);
    }
}
