<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hama;

class DataHamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hama::create([
        'user_id' => 1,
        'code' => 'H1',
        'name' => 'Hama Lalat Bibit (Atherigona sp)',
        'det_hama' => 'Hama lalat Hama Lalat bibit (Atherigona sp) merupakan salah satu hama tanaman jagung yang dapat
        mengakibatkan gagal panen, serangan hama ini bisa mencapai 80 – 100 %. Lalat bibit sangat mudah berkembang biak
        di kelembapan yang tinggi. Oleh karena itu, lalat ini sangat mudah dijumpai pada musim hujan. Siklus hidupnya
        berlangsung selama 15-25 hari. Satu ekor lalat betina mampu menghasilkan telur hingga sebanyak 20-25 butir.
        Telur lalat berwarna mutiara dan biasanya ada di daun muda yang berada di bagian bawah. Telur lalat akan menetas
        setelah 48 jam. Telur biasanya menetas pada malam hari dan menjadi belatung. Belatung akan keluar dari telur dan
        bergerak menuju titik tumbuh tanaman yang merupakan makanan utama. Belatung juga bisa bergerak ke bagian atas
        tanaman setelah menggerek batang bagian bawah dan keluar untuk berpupa di dalam tanah. Hama ini bisa menyerang
        tanaman sejak tumbuh hingga sudah berumur satu bulan. Tempayak lalat biasanya menggerek pucuk tanaman dan masuk
        ke batang tanaman. Lalat sangat menyukai tanaman muda yang masih berumur 6-9 hari setelah tanam untuk meletakkan
        telurnya. Saat itu, tanaman baru memiliki 2-3 helai daun. Biasanya, lalat meletakkan telurnya di daun pertama.',
        'srn_hama' => 'Pengendalian secara kimiawi menggunakan insektisida karbofuran saat tanam atau diberikan pada
        kuncup daun pada umur tanaman satu minggu dengan dosis 0,24 kg bahan aktif/ha. Pengendalian dengan insektisida
        dapat dilakukan dengan perlakuan benih, yaitu Thiodikarb dengan dosis 7,5-15 g b.a. (bahan aktif)/ kg benih atau
        karbofuran dengan dosis 6 g b.a./ kg benih. Selanjutnya setelah tanaman berumur 5-7 hari, disemprot dengan
        karbosulfan dengan dosis 0,2 kg b.a. penggunaan insektisida hanya dianjurkan di daerah endemik.',
        'images' => '1668166678.png',
        ]);
        Hama::create([
        'user_id' => 1,
        'code' => 'H2',
        'name' => 'Hama Ulat Grayak (Spodoptera frugiperda.)',
        'det_hama' => 'Ulat Grayak merupakan salah satu hama yang menyerang tanaman jagung. Ulat ini tidak berbulu dan
        biasa disebut oleh petani sebagai ulat tentara karena menyerang dengan populasi tinggi. Siklus hidup ulat grayak
        dapat berlangsung dari 32 – 46 hari. Fase Telur selama 2-3 hari dengan jumlah telur dapat mencapai 1.046 telur.
        Fase larva selama 14-19 hari. Fase pupa selama 9-12 hari dan Fase Imago selama 7-12 hari. Ulat ini memiliki daya
        migrasi tinggi di mana imago mampu terbang 100 km/malam dan 500 km sebelum meletakkan telurnya. Dengan bantuan
        angin, larva mampu menginvasi tanaman budidaya di sebelahnya. Ulat grayak umumnya menyerang pada malam hari,
        sedangkan pada siang hari ulat ini bersembunyi di bawah tanaman, mulsa atau dalam tanah.',
        'srn_hama' => '1) Secara mekanis, dapat dilakukan adalah dengan cara mencari dan membunuh larva dan telur hama
        ini secara mekanis, yakni dengan dihancurkan dengan tangan. 2) Secara biologis, dengan penggunaan musuh alami
        yang berperan sebagai agen pengendali hayati untuk mengurangi populasi hama ulat grayak. Beberapa contoh musuh
        alami dari hama ini yaitu jenis parasitoid Trichogramma spp. dan jenis predator cecopet, kumbang kepik, dan
        semut. ',
        'images' => '1668166704.png',
        ]);
        Hama::create([
        'user_id' => 1,
        'code' => 'H3',
        'name' => 'Hama Larva Penggerek Batang (Ostrinia furnacalis)',
        'det_hama' => 'Penggerek batang (Ostrinia furnacalis) termasuk salah satu hama utama pada tanaman jagung di Asia
        Tenggara. Serangga ini mempunyai lebih dari satu generasi dalam setahun karena didukung oleh curah hujan yang
        memberikan pengaruh penting pada aktivitas ngengat dan oviposisinya. Tingkat kehilangan hasil pada tanaman
        akibat serangan hama penggerek batang dapat mencapai 80%. Bioekologi hama penggerek batang adalah: 1) Ngengat,
        ngengat aktif malam hari, dan menghasilkan beberapa generasi pertahun, umur imago/ngengat dewasa 7-11 hari. 2)
        Telur, telur diletakkan berwarna putih, berkelompok, satu kelompok telur beragam antara 30-50 butir, umur telur
        3-4 hari. Ngengat betina lebih menyukai meletakkan telur pada tanaman jagung yang tinggi dan telur di letakkan
        pada permukaan bagian bawah daun utamanya pada daun ke 5-9, umur telur 3-4 hari. 3) Larva, larva yang baru
        menetas berwarna putih kekuning-kuningan, makan berpindah pindah, larva muda makan pada bagian alur bunga
        jantan, setelah instar lanjut menggerek batang, umur larva 17-30 hari. 4) Pupa, pupa biasanya terbentuk di dalam
        batang, berwarna coklat kemerah merahan, umur pupa 6-9 hari.',
        'srn_hama' => '1) Waktu tanam yang serentak. 2) Tumpangsari jagung dengan kedelai atau kacang tanah. 3) Pengolahan
        tanah yang baik ',
        'images' => '1668166720.png',
        ]);
        Hama::create([
        'user_id' => 1,
        'code' => 'H4',
        'name' => 'Hama Penggerek Tongkol (Helicoverpa armigera)',
        'det_hama' => 'Hama penggerek tongkol (Helicoverpa armigera) merupakan serangga dari kelompok ngengat yang
        larvanya menjadi salah satu hama yang menyebabkan kerusakan pada buah tanaman jagung.',
        'srn_hama' => 'Pengolahan tanah secara sempurna akan merusak pupa yang terbentuk dalam tanah dan dapat
        mengurangi populasi H. armigera generasi berikutnya.',
        'images' => '1668166767.png',
        ]);
        Hama::create([
        'user_id' => 1,
        'code' => 'H5',
        'name' => 'Hama Kutu Daun (Aphis maidis)',
        'det_hama' => 'Salah satu hama jagung yang menyerang adalah kutu daun pada jagung (Aphis maidis). Kutu daun
        membentuk koloni yang besar pada daun. Betina berproduksi secara partenoge nesis (tanpa kawin). Umumnya, stadia
        nimfa terdiri atas empat instar (Kring 1985). Stadium nimfa terjadi selama 16 hari pada suhu 15°C, sembilan hari
        pada suhu 20°C, dan lima hari pada suhu 30°C.',
        'srn_hama' => 'Melakukan penanaman jagung secara polikultur karena akan meningkatkan predasi dari predator
        kutu daun dibandingkan dengan penanaman secara monokultur.',
        'images' => '1668166780.png',
        ]);
    }
}
