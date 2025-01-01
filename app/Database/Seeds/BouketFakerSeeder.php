<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class BouketFakerSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 25; $i++) {
            // Random size
            $sz = $faker->randomElement(['small', 'medium', 'large']);
            $size = ($sz == 'small') ? 'small' : (($sz == 'medium') ? 'medium' : 'large');

            // Random type
            $tp = $faker->randomElement(['snack', 'flower', 'money']);
            $type = ($tp == 'snack') ? 'snack' : (($tp == 'flower') ? 'flower' : 'money');


            $data = [
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'size' => $sz,
                'type' => $tp,
                'information' => 'ini deskripsi',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ];

            $this->db->table('bouket_mounichan')->insert($data);
        }
    }
}
