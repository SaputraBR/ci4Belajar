<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Belajar extends Seeder
{
    public function run()
    {
        $isi = [
            [
                'judul'   => 'Tes tes dicoba',
                'content' => 'Satu dua tiga tes, satu dua tiga tes tes',
                'kategori' => 'Testing',
                'slug' => 'tes-satu',
                'status' => 'punlished'
            ],
        ];

        foreach($isi as $data){

			$this->db->table('belajar')->insert($data);
		}
    }
}
