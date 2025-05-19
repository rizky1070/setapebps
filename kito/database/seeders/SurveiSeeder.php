<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveiSeeder extends Seeder
{
    public function run()
    {
        $baseData = [
            'id_kabupaten' => '16',
            'id_provinsi' => DB::table('provinsi')->value('id_provinsi') // Ambil id_provinsi pertama yang ada
        ];

        // Data survei dalam format minimal
        $surveiRecords = [
            ['010','1', 'Survei A', 'Kro A', '2018-03-15', '2018-03-22', '2018-03-01', 'tim A'],
            ['020','20', 'Survei B', 'Kro B', '2019-07-10', '2019-07-18', '2019-07-01', 'tim B'],
            ['030','38', 'Survei C', 'Kro C', '2020-11-05', '2020-11-12', '2020-11-01', 'tim C'],
            ['040','58', 'Survei D', 'Kro D', '2021-02-20', '2021-02-27', '2021-02-01', 'tim D'],
            ['050','71', 'Survei E', 'Kro E', '2022-05-12', '2022-05-19', '2022-05-01', 'tim E'],
            ['060','90', 'Survei F', 'Kro F', '2023-09-08', '2023-09-15', '2023-09-01', 'tim F'],
            ['070','109', 'Survei G', 'Kro G', '2024-01-20', '2024-01-25', '2024-01-01', 'tim G'],
            ['080','126', 'Survei H', 'Kro H', '2025-04-10', '2025-04-15', '2025-04-01', 'tim H'],
            ['090','145', 'Survei I', 'Kro I', '2025-04-15', '2025-04-20', '2025-04-01', 'tim I'],
            ['091','162', 'Survei J', 'Kro J', '2025-05-10', '2025-05-20', '2025-05-01', 'tim J'],
            ['100','174', 'Survei K', 'Kro K', '2025-06-01', '2025-06-08', '2025-06-01', 'tim K'],
            ['110','190', 'Survei L', 'Kro L', '2025-07-15', '2025-07-22', '2025-07-01', 'tim L'],
            ['120','206', 'Survei M', 'Kro M', '2025-08-10', '2025-08-17', '2025-08-01', 'tim M'],
            ['130','222', 'Survei N', 'Kro N', '2025-09-05', '2025-09-12', '2025-09-01', 'tim N'],
            ['140','237', 'Survei O', 'Kro O', '2025-10-20', '2025-10-27', '2025-10-01', 'tim O'],
            ['150','251', 'Survei P', 'Kro P', '2025-11-15', '2025-11-22', '2025-11-01', 'tim P'],
            ['160','271', 'Survei Q', 'Kro Q', '2020-12-01', '2020-12-08', '2020-12-01', 'tim Q'],
            ['170','287', 'Survei R', 'Kro R', '2020-01-10', '2020-01-17', '2020-01-01', 'tim R'],
            ['170','288', 'Survei S', 'Kro S', '2020-02-15', '2020-02-22', '2020-02-01', 'tim S'],
            ['170','289', 'Survei T', 'Kro T', '2020-03-05', '2020-03-12', '2020-03-01', 'tim T'],
            ['170','290', 'Survei anomali 1', 'anomali', '2025-03-27', '2025-04-10', '2025-04-01', 'tim T'],
            ['170','291', 'Survei anomali 2', 'anomali', '2025-03-23', '2025-04-01', '2025-03-01', 'tim T'],
        ];


        // Format data untuk insert
        $dataToInsert = array_map(function($record) use ($baseData) {
            return array_merge($baseData, [
                'nama_survei' => $record[2],
                'kro' => $record[3],
                'jadwal_kegiatan' => $record[4],
                'jadwal_berakhir_kegiatan' => $record[5],
                'bulan_dominan' => $record[6],
                'status_survei' => rand(1, 3),
                'tim' => $record[7],
            ]);
        }, $surveiRecords);

        DB::table('survei')->insert($dataToInsert);
    }
}