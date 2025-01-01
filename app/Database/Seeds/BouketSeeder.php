<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class BouketSeeder extends Seeder
{
    public function run()
    {
        $data=[
            [
                'name'=>'Cantika Gustiani',
                'email'=>'cantika@example.com',
                'phone'=>'08123123123',
                'address'=>'dimana aja',
                'size'=>'medium',
                'type'=>'money',
                'information'=>'pengen pecahan 5k',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ]
            ];
            $this->db->table('bouket_mounichan')->insertBatch($data);
    }
}
