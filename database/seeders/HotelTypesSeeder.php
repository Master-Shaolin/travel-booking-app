<?php

namespace Database\Seeders;

use App\Models\HotelType;
use Illuminate\Database\Seeder;

class HotelTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'Hotels',
                'description' => 'Common hotel'
            ],
            [
                'name' => 'Apartments',
                'description' => 'A suite of rooms forming one residence'
            ],
            [
                'name' => 'Resorts',
                'description' => ''
            ],
            [
                'name' => 'Villas',
                'description' => ''
            ],
            [
                'name' => 'Cabins',
                'description' => ''
            ],
            [
                'name' => 'Cotages',
                'description' => ''
            ]
       ];

       foreach ($types as $type) {
           HotelType::create($type);
       }
    }
}
