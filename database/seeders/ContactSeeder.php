<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Carbon\Carbon;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $contacts = [
            [
                'id' => 11,
                'email' => 'dani@gmail.com',
                'name' => 'dani budi santoso',
                'message' => 'tolong pamflet brosurnya disebar lebih luas lagi saya hampir ketinggalan pendaftarannya!',
                'created_at' => Carbon::parse('2025-04-26 21:02:52'),
                'updated_at' => Carbon::parse('2025-04-26 21:02:52'),
            ],
            [
                'id' => 12,
                'email' => 'virga@gmail.com',
                'name' => 'virganda',
                'message' => 'saya sudah pergi ke sana ternyata sekolahannya tidak terlalu buruk hanya saja kenapa muridnya jadi semakin sedikit',
                'created_at' => Carbon::parse('2025-04-26 21:04:05'),
                'updated_at' => Carbon::parse('2025-04-26 21:04:05'),
            ],
            [
                'id' => 13,
                'email' => 'lilia@gmail.com',
                'name' => 'lili andari putri',
                'message' => 'Proses pendaftaran PPDB di website ini cukup jelas dan mudah dipahami.
Langkah-langkah yang disediakan memudahkan orang tua dan calon siswa untuk mengikuti alur pendaftaran.
Akan lebih baik jika ditambahkan fitur cek status pendaftaran secara online juga.',
                'created_at' => Carbon::parse('2025-04-26 21:06:11'),
                'updated_at' => Carbon::parse('2025-04-26 21:06:11'),
            ],
            [
                'id' => 14,
                'email' => 'siska@gmail.com',
                'name' => 'siska amanda',
                'message' => 'Keren banget!
Websitenya ringan diakses, informasinya juga jelas, apalagi buat yang mau daftar ke SMP PGRI Bakung.
Sukses terus untuk sekolahnya!',
                'created_at' => Carbon::parse('2025-04-26 21:07:52'),
                'updated_at' => Carbon::parse('2025-04-26 21:07:52'),
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}