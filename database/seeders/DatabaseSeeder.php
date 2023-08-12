<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Value;
use App\Models\Setting;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // \App\Models\User::factory(10)->create();
      User::create([
      'name' => 'Admin',
      'email' => 'admin@mail.com',
      'password' => bcrypt('admin123'),
      'level' => 'admin',
      ]);

      User::create([
      'name' => 'User',
      'email' => 'user@mail.com',
      'password' => bcrypt('user123'),
      'level' => 'user',
      ]);
      
        $this->call([
        DataHamaSeeder::class,
        DataPenyakitSeeder::class,
        GejalaHamaSeeder::class,
        GejalaPenyakitSeeder::class,
        RulesHamaSeeder::class,
        RulesPenyakitSeeder::class,
        ]);

        Value::create(['name' => 'Sangat Yakin', 'value' => 1.0]);
        Value::create(['name' => 'Yakin', 'value' => 0.8]);
        Value::create(['name' => 'Cukup', 'value' => 0.6]);
        Value::create(['name' => 'Kurang Yakin', 'value' => 0.4]);
        Value::create(['name' => 'Tidak Yakin', 'value' => 0.2]);

        Setting::create([
            'title' => 'Sistem Pakar Diagnosa Hama dan Penyakit pada Tanaman Jagung',
            'description' => '<p>Sistem pakar adalah sistem yang membantu para pakar untuk melakukan diagnosa suatu penyakit apapun seperti penyakit pada manusia, hewan, tumbuhan dan makhluk hidup lainnya. dengan bantuan komputasi komputer untuk melakukan diagnosa berdasarkan ilmu atau pemahaman pakar.</p><p>Pada sistem pakar Sipagung ini metode pakar yang digunakan untuk mendiagnosa adalah metode Certainty Factor. Certinty Factor atau faktor kepastian adalah salah satu metode sistem pakar untuk membuktikan apakah suatu fakta itu pasti ataukah tidak pasti yang berbentuk metric yang biasanya digunakan dalam sistem pakar.</p><p>Sipagung memiliki kelebihan untuk menambahkan jenis hipotesis seperti hama maupun penyakit beserta gejala hama maupun gejala penyakit dan juga bisa digunakan untuk melakukan diagnosa untuk mengetahui hama atau penyakit apa yang terdapat pada tanaman jagung.</p>',
            'input_type' => 'select'
        ]);
    }
}
