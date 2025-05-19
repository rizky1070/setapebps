<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MitraSurveiSeeder extends Seeder
{
    public function run()
    {
        DB::table('mitra_survei')->insert([
            // Data pertama
            [
                'id_mitra' => 1,
                'id_survei' => 1,
                'posisi_mitra' => 'Posisi A',
                'catatan' => 'Catatan untuk Mitra 1',
                'nilai' => 4,
                'vol' => 3,
                'honor' => 100000,
                'tgl_ikut_survei' => '2018-03-15'
            ],
            // Data kedua
            [
                'id_mitra' => 2,
                'id_survei' => 2,
                'posisi_mitra' => 'Posisi B',
                'catatan' => 'Catatan untuk Mitra 2',
                'nilai' => 5,
                'vol' => 7,
                'honor' => 100000,
                'tgl_ikut_survei' => '2019-07-10'
            ],
            // Data ketiga
            [
                'id_mitra' => 3,
                'id_survei' => 3,
                'posisi_mitra' => 'Posisi C',
                'catatan' => 'Catatan untuk Mitra 3',
                'nilai' => 3,
                'vol' => 8,
                'honor' => 100000,
                'tgl_ikut_survei' => '2020-11-05'
            ],
            // Data keempat
            [
                'id_mitra' => 4,
                'id_survei' => 4,
                'posisi_mitra' => 'Posisi D',
                'catatan' => 'Catatan untuk Mitra 4',
                'nilai' => 4,
                'vol' => 2,
                'honor' => 100000,
                'tgl_ikut_survei' => '2021-02-20'
            ],
            // Data kelima
            [
                'id_mitra' => 5,
                'id_survei' => 5,
                'posisi_mitra' => 'Posisi E',
                'catatan' => 'Catatan untuk Mitra 5',
                'nilai' => 5,
                'vol' => 5,
                'honor' => 100000,
                'tgl_ikut_survei' => '2022-05-12'
            ],
            // Data keenam
            [
                'id_mitra' => 6,
                'id_survei' => 6,
                'posisi_mitra' => 'Posisi F',
                'catatan' => 'Catatan untuk Mitra 6',
                'nilai' => 3,
                'vol' => 6,
                'honor' => 100000,
                'tgl_ikut_survei' => '2023-09-08'
            ],
            // Data ketujuh
            [
                'id_mitra' => 7,
                'id_survei' => 7,
                'posisi_mitra' => 'Posisi G',
                'catatan' => 'Catatan untuk Mitra 7',
                'nilai' => 4,
                'vol' => 3,
                'honor' => 100000,
                'tgl_ikut_survei' => '2024-01-20'
            ],
            // Data kedelapan
            [
                'id_mitra' => 8,
                'id_survei' => 8,
                'posisi_mitra' => 'Posisi H',
                'catatan' => 'Catatan untuk Mitra 8',
                'nilai' => 3,
                'vol' => 2,
                'honor' => 100000,
                'tgl_ikut_survei' => '2025-04-10'
            ],
            // Data kesembilan
            [
                'id_mitra' => 9,
                'id_survei' => 9,
                'posisi_mitra' => 'Posisi I',
                'catatan' => 'Catatan untuk Mitra 9',
                'nilai' => 4,
                'vol' => 5,
                'honor' => 100000,
                'tgl_ikut_survei' => '2025-04-15'
            ],
            // Data kesepuluh
            [
                'id_mitra' => 10,
                'id_survei' => 8,
                'posisi_mitra' => 'Posisi J',
                'catatan' => 'Catatan untuk Mitra 10',
                'nilai' => 5,
                'vol' => 2,
                'honor' => 100000,
                'tgl_ikut_survei' => '2025-04-10'
            ],
            // 
            [
                'id_mitra' => 10,
                'id_survei' => 9,
                'posisi_mitra' => 'Posisi J',
                'catatan' => 'Catatan untuk Mitra 10',
                'nilai' => 5,
                'vol' => 2,
                'honor' => 100000,
                'tgl_ikut_survei' => '2025-04-10'
            ],

            // Data kesepuluh
            [
                'id_mitra' => 21,
                'id_survei' => 21,
                'posisi_mitra' => 'Posisi J',
                'catatan' => 'Catatan untuk Mitra 21',
                'nilai' => 5,
                'vol' => 2,
                'honor' => 100000,
                'tgl_ikut_survei' => '2025-03-10'
            ],
            // 
            [
                'id_mitra' => 21,
                'id_survei' => 22,
                'posisi_mitra' => 'Posisi J',
                'catatan' => 'Catatan untuk Mitra 21',
                'nilai' => 5,
                'vol' => 2,
                'honor' => 10000,
                'tgl_ikut_survei' => '2025-03-10'
            ]
        ]);
    }
}