<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name' => 'Asia Heritage',
            'description' => 'Destinasi wisata bertema luar negeri pertama di Pekanbaru, hadirkan nuansa Jepang, Korea, dan China. Jelajahi area seluas 16 Hektar dengan spot foto arsitektur ikonik dan penyewaan kostum tradisional yang autentik.',
            'location' => 'Jl. Yos Sudarso No.12, Muara Fajar, Kec. Rumbai, Kota Pekanbaru, Riau 28265',
            'working_day' => 'Setiap Hari',
            'working_hour' => '09.00 - 18.00',
            'ticket_price' => 30000,
        ]);
        Destination::create([
            'name' => 'Agro Wisata Pelangia',
            'description' => 'Agro Wisata Pelangi di Tenayan Raya, Pekanbaru, adalah destinasi edukasi keluarga dengan tiket masuk terjangkau (dewasa Rp15.000, anak-anak Rp10.000). Menawarkan kebun buah seperti anggur dan kelengkeng, taman bunga, serta wahana permainan, tempat ini berlokasi strategis di Jl. Lintas Sumatra, cocok untuk rekreasi edukatif akhir pekan',
            'location' => 'Jl. Lintas Sumatera, Kulim, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28289',
            'working_day' => 'Senin - Jumat',
            'working_hour' => '10.00 - 18.00',
            'ticket_price' => 15000,
        ]);
        Destination::create([
            'name' => 'Istana Siak',
            'description' => 'Istana Siak adalah destinasi wisata sejarah di Pekanbaru, Riau. Tempat ini menawarkan pengalaman budaya yang kaya dengan arsitektur tradisional dan koleksi benda bersejarah.',
            'location' => 'Sri indrapura, Kp. Dalam, Kec. Siak, Kabupaten Siak, Riau 28773',
            'working_day' => 'Sabtu - Minggu',
            'working_hour' => '09.00 - 18.00',
            'ticket_price' => 10000,
        ]);
        Destination::create([
            'name' => 'Rainbow Hills',
            'description' => 'Rainbow Hills di Pekanbaru, Riau, adalah destinasi wisata alam yang menawarkan pemandangan perbukitan berwarna-warni. Tempat ini cocok untuk hiking, piknik, dan menikmati keindahan alam dengan latar belakang langit yang cerah.',
            'location' => 'Jl. Kemping, Lembah Sari, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28261',
            'working_day' => 'Sabtu - Minggu',
            'working_hour' => '24 Jam',
            'ticket_price' => 2000,
        ]);
        Destination::create([
            'name' => 'Air Terjun Batang Kapas',
            'description' => 'Air Terjun Batang Kapas adalah destinasi wisata alam di Pekanbaru, Riau. Tempat ini menawarkan pemandangan air terjun yang indah dan suasana alam yang menenangkan.',
            'location' => 'Lubuk Bigau, Kampar Kiri Hulu, Kampar Regency, Riau 28471',
            'working_day' => 'Setiap Hari',
            'working_hour' => '24 Jam',
            'ticket_price' => 10000,
        ]);

        for ($i = 0; $i < 100; $i++) {
        Destination::create([
            'name' => fake('id_ID')->name(),
            'description' => fake('id_ID')->paragraph(),
            'location' => fake('id_ID')->address() . ', Pekanbaru, Riau',
            'working_day' => fake('id_ID')->randomElement(['Setiap Hari', 'Senin - Jumat', 'Weekend']),
            'working_hour' => fake('id_ID')->boolean() ? '24 Jam' : fake('id_ID')->time('H:i') . ' - ' . fake('id_ID')->time('H:i'),
            'ticket_price' => fake('id_ID')->numberBetween(1000, 50000),
        ]);
    }
    }
}
