<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penyakit;

class DataPenyakitSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Penyakit::create([
      'user_id' => 1,
      'code' => 'P1',
      'name' => 'Penyakit Hawar Daun (Exserohilum turcicum)',
      'det_penyakit' => 'Hawar daun Exserohilum turcicum (Pass.) Leonard et Suggs merupakan penyakit pada tanaman jagung yang disebabkan oleh jamur E. turcicum (Pass.) Leonard et Suggs, jamur membentuk konidiofor yang keluar dari mulut daun (stomata), satu atau dua dalam kelompok, lurus atau lentur, berwarna coklat, panjangnya sampai 300 µm, tebal 7-11 µm, secara umum 8-9 µm. Konidium lurus atau agak melengkung, jorong atau berbentuk gada terbalik, pucat atau berwarna coklat jerami, halus mempunyai 4-9 sekat palsu, panjang 50-144 (115) µm, dan bagian yang paling lebar berukuran 18-33 µm, kebanyakan 20-24 µm.',
      'srn_penyakit' => '1) Penggunaan varietas tahan. Penanaman varietas tahan merupakan cara pengendalian yang mudah, murah, dan aman bagi lingkungan. 2) Sanitasi lingkungan. E. turcicum selain menginfeksi tanaman jagung, juga dapat merusak beberapa jenis gulma atau tanaman inang alternatif. Oka (1993) mengemukakan bahwa untuk mengendalikan penyakit tanaman, maka sumber inokulum awal (X) harus dihilangkan/dikurangi. Pengolahan tanah yang baik dan penyiangan yang sempurna dapat menekan/mengurangi sumber inokulum awal.
      3) Budi daya. Pengaturan jarak tanam juga dapat mengendalikan E. turcicum. Jarak tanam yang rapat menyebabkan kelembaban udara di sekitar tanaman menjadi lebih tinggi dan suhu menjadi optimal bagi perkembangan E. turcicum. 4) Fungisida. Jika diperlukan, penyakit ini dapat dikendalikan dengan fungisida dengan bahan aktif carbendazin 6,2% + mancozeb 73,8%, mancozeb 80%, trishloromethylthio-4-cyclohexene-1,2-dicarboximide. 5) Perlakuan benih. Jamur yang terbawa oleh biji dapat dimatikan dengan thiram dan karboxin, atau perlakuan udara panas selama 17 menit pada suhu 54-55°C.',
      'images' => '1668166929.png',
    ]);
    Penyakit::create([
      'user_id' => 1,
      'code' => 'P2',
      'name' => 'Penyakit Bulai (Peronosclerospora maydis)',
      'det_penyakit' => 'Penyakit bulai (downy mildew) merupakan penyakit utama bagi tanaman jagung. Serangan penyakit
      ini mulai terjadi umur dua minggu setelah tanam. penyakit bulai apabila tidak tertangani dengan baik akan
      menyebabkan kehilangan hasil sampai 100%. Peningkatan suhu dan kelembaban diperkirakan akan semakin mempercepat
      perkembangbiakan dan penyebaran spora bulai melalui media udara, tanah ataupun benih. Ciri umum yang ditimbulkan
      dari serangan bulai adalah munculnya butiran putih pada daun yang merupakan spora cendawan pathogen. Penyakit
      bulai yang disebabkan oleh cendawan Peronosclerospora maydis, P. Spora javanica dan P. Spora philippinensis. Masa
      kritis tanaman jagung terserang bulai mulai benih ditanam sampai dengan umur 40 hari.',
      'srn_penyakit' => '1) Penggunaan varietas tahan. 2) Penerapan pola tanam dan pergiliran tanaman. 4) Sanitasi lingkungan pertanaman jagung. 3) Rotasi tanaman dengan tujuan untuk memutus ketersediaan inokulum bulai dengan menanam tanaman dari bukan sereal. 4) Eradikasi tanaman yang terserang bulai. 5) Penggunaan fungisida sebagai perlakuan benih (seed treatment) untuk mencegah terjadinya infeksi bulai lebih awal.',
      'images' => '1668166991.png',
    ]);
    Penyakit::create([
      'user_id' => 1,
      'code' => 'P3',
      'name' => 'Penyakit Busuk Batang (Fusarium)',
      'det_penyakit' => 'Penyakit busuk batang adalah penyakit pada tanaman jagung yang disebabkan oleh cendawan patogen yang memproduksi konidia. Konidia ini kemudian akan menyebar oleh hembusan angin, air hujan, maupun serangga. Pada saat lahan tidak ada tanaman, cendawan penyebab penyakit dapat bertahan pada sisa-sisa tanaman yang terinfeksi dalam fase hifa atau piknidia dan peritesia yang berisi spora. Jika kondisi lingkungan mendukung, maka spora akan keluar dari piknidia atau peritesia. Spora yang menempel pada permukaan tanaman jagung akan tumbuh dan menginfeksi tanaman melalui akar atau pangkal batang. proses infeksi awal dapat melalui luka atau membentuk sejenis apresoria yang mampu menembus masuk ke jaringan tanaman. spora yang terbawa oleh angin dapat menginfeksi ke tongkol jagung. dan biji jagung yang terinfeksi apabila ditanam dapat menyebabkan penyakit busuk batang.',
      'srn_penyakit' => '1) Menanam varietas tahan. 2) Pergiliran tanaman yang tidak termasuk inang. 3) Pemupukan berimbang, menghindari pemberian pupuk N dengan takaran tinggi dan pupuk K dengan takaran rendah,
      populasi tanaman rendah (Shurtleff 1980). 4) Drainase yang baik dan pemberian air juga baik (Wakman et al. 1998).',
      'images' => '1668167000.png',
    ]);
    Penyakit::create([
      'user_id' => 1,
      'code' => 'P4',
      'name' => 'Penyakit Karat Daun (Puccinia Polysora Undrew)',
      'det_penyakit' => 'Penyakit karat adalah segolongan penyakit tumbuhan yang disebabkan oleh golongan cendawan (fungi) yang termasuk dalam bangsa (ordo) Pucciniales. Penyakit ini paling jelas gejalanya terlihat pada daun, sehingga disebut karat daun.',
      'srn_penyakit' => 'Pengendalian Kimiawi: Selalu pertimbangkan pendekatan terpadu dengan tindakan pencegahan bersama dengan perlakuan hayati jika tersedia. Penyemprotan fungisida dapat bermanfaat jika digunakan pada
      varietas yang rentan. Berikan fungisida daun pada awal musim jika karat menyebar dengan cepat karena kondisi
      cuaca. Banyak jenis fungisida yang tersedia untuk pengendalian karat. Produk-produk yang mengandung
      mankozeb, piraklostrobin, piraklostrobin + metkonazol, piraklostrobin fluksapiroksad, azoksistrobin +
      propikonazol, trifloksistrobin + protiokonazol dapat digunakan untuk mengendalikan penyakit ini. Contoh
      perlakuannya dapat berupa penyemprotan mankozeb @ 2,5 g/l segera setelah bintil-bintil muncul dan ulangi
      dalam selang 10 hari hingga tahap berbunga.',
      'images' => '1662961220.png',
    ]);
    Penyakit::create([
      'user_id' => 1,
      'code' => 'P5',
      'name' => 'Hawar Upih (rhizoctonia solani fungus)',
      'det_penyakit' => 'Penyakit hawar upih adalah penyakit pada tanaman jagung yang disebabkan oleh cendawan
      Rhizoctonia Solani Fungus. sp. Sasaki Exner.',
      'srn_penyakit' => '1) Penanaman varietas tahan pada musim hujan. 2) Penanaman jagung sebaiknya pada musim kemarau. 3) Penanaman varietas yang letak tongkolnya tinggi. 4) Membuang (merompes) daun yang berada di bawah tongkol yang
      pelepahnya telah tertular hawar upih (Sudjono 1988). ',
      'images' => '1668167022.png',
    ]);
  }
}
