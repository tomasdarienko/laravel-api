<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use illuminate\supprt\Str;
class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'HTML',
            'Css',
            'Javascript',
            'Vuejs',
            'PHP',
            'Laravel',
            'vite',
            'MySQL'
            ];

            foreach($array as $item){
                $technology = new Technology();
                $technology->name = $item;
                $technology->slug = Str::slug($item, '-');

                $technology->save();
            }
        
    }
}
