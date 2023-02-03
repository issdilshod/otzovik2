<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin\University\EducationType::create([
            'name' => 'Очная',
            'slug' => \App\Http\Services\Admin\Misc\StringService::slug('Очная')
        ]);

        \App\Models\Admin\University\EducationType::create([
            'name' => 'Заочная',
            'slug' => \App\Http\Services\Admin\Misc\StringService::slug('Заочная')
        ]);

        \App\Models\Admin\University\EducationType::create([
            'name' => 'Очно-заочная',
            'slug' => \App\Http\Services\Admin\Misc\StringService::slug('Очно-заочная')
        ]);
    }
}
