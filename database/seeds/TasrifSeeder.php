<?php

use Illuminate\Database\Seeder;

class TasrifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasrifExample = [
            ['menambah/bertambah', 'زَادَ', 'يَزِيْدُ', 'زِيَادَة', null, 'زِدْ', '12.2'],
            ['bertanya/meminta/memohon', 'سَأَلَ', 'يَسْأَلُ', 'سُؤَال', null, 'اِسْأَلْ', '12.1'],
            ['selamat/sehat', 'سَلِمَ', 'يَسْلَمُ', 'سَلاَمَة', 'سَلِيْم', null, '12.1'],
            ['masuk islam/tunduk/menyerah diri', 'أَسْلَمَ', 'يُسْلِمُ', 'إِسْلَام', 'مُسْلِم', 'أَسْلِمْ', '12.1'],
        ];

        foreach ($tasrifExample as $tasrif) {
            DB::table('tasrif')->insert([
                'arti' => $tasrif[0],
                'madi' => $tasrif[1],
                'mudhori' => $tasrif[2],
                'masdar' => $tasrif[3],
                'sifat' => $tasrif[4],
                'amr' => $tasrif[5],
                'bab' => $tasrif[6]
            ]);
        }

    }
}
