<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gejalahama;

class GejalaHamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Gejalahama::create([
      'code' => 'GH01',
      'name' => 'Warna daun berubah menjadi kekuningan',
      ]);
      Gejalahama::create([
      'code' => 'GH02',
      'name' => 'Terdapat bekas gigitan di bagian daun atau pucuk daun',
      ]);
      Gejalahama::create([
      'code' => 'GH03',
      'name' => 'Pada daun tanaman yang masih muda akan terlihat menggulung',
      ]);
      Gejalahama::create([
      'code' => 'GH04',
      'name' => 'Tanaman menjadi kerdil',
      ]);
      Gejalahama::create([
      'code' => 'GH05',
      'name' => 'Titik tumbuh layu dan bila bagian yang layu dicabut akan mudah lepas serta kelihatan membusuk',
      ]);
      Gejalahama::create([
      'code' => 'GH06',
      'name' => 'Adanya bekas gesekan dari larva atau ulat',
      ]);
      Gejalahama::create([
      'code' => 'GH07',
      'name' => 'Pada permukaan atas daun atau di sekitar pucuk tanaman jagung, ditemukan serbuk kasar seperti serbuk
      gergaji.',
      ]);
      Gejalahama::create([
      'code' => 'GH08',
      'name' => 'Terdapat kerusakan pada bagian pucuk, daun muda, lalu menyebabkan tanaman jagung dipastikan akan
      mati.',
      ]);
      Gejalahama::create([
      'code' => 'GH09',
      'name' => 'Terdapat kerusakan bagian tongkol jagung',
      ]);
      Gejalahama::create([
      'code' => 'GH10',
      'name' => 'Tampak lubang gerekan pada batang',
      ]);
      Gejalahama::create([
      'code' => 'GH11',
      'name' => 'Terdapat serbuk-serbuk gerek berwarna cokelat pada lubang gerekan.',
      ]);
      Gejalahama::create([
      'code' => 'GH12',
      'name' => 'Terdapat lubang gerek pada batang dapat menyebabkan batang tersebut mudah patah atau roboh.',
      ]);
      Gejalahama::create([
      'code' => 'GH13',
      'name' => 'Adanya lubang melintang pada daun tanaman stadia vegetatif',
      ]);
      Gejalahama::create([
      'code' => 'GH14',
      'name' => 'Adanya rambut tongkol jagung yang terpotong',
      ]);
      Gejalahama::create([
      'code' => 'GH15',
      'name' => 'Terdapat bekas gerekan pada tongkol',
      ]);
      Gejalahama::create([
      'code' => 'GH16',
      'name' => 'Terdapat larva pada tongkol jagung',
      ]);
      Gejalahama::create([
      'code' => 'GH17',
      'name' => 'Hama ini menyerap cairan daun dan batang tanaman',
      ]);
      Gejalahama::create([
      'code' => 'GH18',
      'name' => 'Warna dan bentuk daun menjadi tidak normal',
      ]);
      Gejalahama::create([
      'code' => 'GH19',
      'name' => 'Tanaman jagung menjadi kering',
      ]);
      Gejalahama::create([
      'code' => 'GH20',
      'name' => 'Adanya embun jelaga berwarna hitam yang menutupi daun',
      ]);
    }
}
