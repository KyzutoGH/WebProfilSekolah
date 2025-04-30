<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;
use Carbon\Carbon;

class PhotoSeeder extends Seeder
{
    public function run()
    {
        $photos = [
            [
                'id' => 1,
                'image' => '1739329122.jpg',
                'judul' => 'istigosah',
                'created_at' => Carbon::parse('2025-02-11 19:58:42'),
                'updated_at' => Carbon::parse('2025-02-11 19:58:42'),
            ],
            [
                'id' => 2,
                'image' => '1739370814.jpg',
                'judul' => 'gotong royong',
                'created_at' => Carbon::parse('2025-02-12 07:33:34'),
                'updated_at' => Carbon::parse('2025-02-12 07:33:34'),
            ],
            [
                'id' => 3,
                'image' => '1739534696.jpg',
                'judul' => 'kegiatan senam',
                'created_at' => Carbon::parse('2025-02-14 05:04:56'),
                'updated_at' => Carbon::parse('2025-02-14 05:04:56'),
            ],
            [
                'id' => 4,
                'image' => '1739534719.jpg',
                'judul' => 'kegiatan senam',
                'created_at' => Carbon::parse('2025-02-14 05:05:19'),
                'updated_at' => Carbon::parse('2025-02-14 05:05:19'),
            ],
            [
                'id' => 5,
                'image' => '1739534740.jpg',
                'judul' => 'pramuka',
                'created_at' => Carbon::parse('2025-02-14 05:05:40'),
                'updated_at' => Carbon::parse('2025-02-14 05:05:40'),
            ],
            [
                'id' => 6,
                'image' => '1739534776.jpg',
                'judul' => 'kegiatan belajar',
                'created_at' => Carbon::parse('2025-02-14 05:06:16'),
                'updated_at' => Carbon::parse('2025-02-14 05:06:16'),
            ],
            [
                'id' => 7,
                'image' => '1739534856.jpg',
                'judul' => 'mengaji',
                'created_at' => Carbon::parse('2025-02-14 05:07:36'),
                'updated_at' => Carbon::parse('2025-02-14 05:07:36'),
            ],
            [
                'id' => 9,
                'image' => '1739534895.jpg',
                'judul' => 'perpustakaan',
                'created_at' => Carbon::parse('2025-02-14 05:08:15'),
                'updated_at' => Carbon::parse('2025-02-14 05:08:15'),
            ],
            [
                'id' => 10,
                'image' => '1739534915.jpg',
                'judul' => 'menari',
                'created_at' => Carbon::parse('2025-02-14 05:08:35'),
                'updated_at' => Carbon::parse('2025-02-14 05:08:35'),
            ],
            [
                'id' => 11,
                'image' => '1739534945.jpg',
                'judul' => 'Upacara Bendera',
                'created_at' => Carbon::parse('2025-02-14 05:09:05'),
                'updated_at' => Carbon::parse('2025-02-14 05:09:05'),
            ],
            [
                'id' => 12,
                'image' => '1739534974.jpg',
                'judul' => 'pramuka',
                'created_at' => Carbon::parse('2025-02-14 05:09:34'),
                'updated_at' => Carbon::parse('2025-02-14 05:09:34'),
            ],
            [
                'id' => 13,
                'image' => '1739535000.jpg',
                'judul' => 'pramuka',
                'created_at' => Carbon::parse('2025-02-14 05:10:00'),
                'updated_at' => Carbon::parse('2025-02-14 05:10:00'),
            ],
            [
                'id' => 14,
                'image' => '1739535040.jpg',
                'judul' => 'Upacara Bendera',
                'created_at' => Carbon::parse('2025-02-14 05:10:40'),
                'updated_at' => Carbon::parse('2025-02-14 05:10:40'),
            ],
            [
                'id' => 15,
                'image' => '1739535076.jpg',
                'judul' => 'Upacara Bendera',
                'created_at' => Carbon::parse('2025-02-14 05:11:16'),
                'updated_at' => Carbon::parse('2025-02-14 05:11:16'),
            ],
            [
                'id' => 16,
                'image' => '1739535122.jpg',
                'judul' => 'pemilihan osis',
                'created_at' => Carbon::parse('2025-02-14 05:12:02'),
                'updated_at' => Carbon::parse('2025-02-14 05:12:02'),
            ],
            [
                'id' => 17,
                'image' => '1739535138.jpg',
                'judul' => 'pemilihan osis',
                'created_at' => Carbon::parse('2025-02-14 05:12:18'),
                'updated_at' => Carbon::parse('2025-02-14 05:12:18'),
            ],
            [
                'id' => 21,
                'image' => '1740405281.jpg',
                'judul' => 'olahraga',
                'created_at' => Carbon::parse('2025-02-24 06:54:41'),
                'updated_at' => Carbon::parse('2025-02-24 06:54:41'),
            ],
            [
                'id' => 22,
                'image' => '1740405294.jpg',
                'judul' => 'olahraga',
                'created_at' => Carbon::parse('2025-02-24 06:54:54'),
                'updated_at' => Carbon::parse('2025-02-24 06:54:54'),
            ],
            [
                'id' => 23,
                'image' => '1740921076.jpg',
                'judul' => 'menari',
                'created_at' => Carbon::parse('2025-03-02 06:11:16'),
                'updated_at' => Carbon::parse('2025-03-02 06:11:16'),
            ],
            [
                'id' => 24,
                'image' => '1740921093.jpg',
                'judul' => 'kerja bakti',
                'created_at' => Carbon::parse('2025-03-02 06:11:33'),
                'updated_at' => Carbon::parse('2025-03-02 06:11:33'),
            ],
            [
                'id' => 25,
                'image' => '1740921109.jpg',
                'judul' => 'kerja bakti',
                'created_at' => Carbon::parse('2025-03-02 06:11:49'),
                'updated_at' => Carbon::parse('2025-03-02 06:11:49'),
            ],
            [
                'id' => 26,
                'image' => '1740921155.jpg',
                'judul' => 'pemilihan osis',
                'created_at' => Carbon::parse('2025-03-02 06:12:36'),
                'updated_at' => Carbon::parse('2025-03-02 06:12:36'),
            ],
            [
                'id' => 29,
                'image' => '1740921236.jpg',
                'judul' => 'pemilihan osis',
                'created_at' => Carbon::parse('2025-03-02 06:13:56'),
                'updated_at' => Carbon::parse('2025-03-02 06:13:56'),
            ],
            [
                'id' => 31,
                'image' => '1744342501.jpg',
                'judul' => 'pondok romadhon',
                'created_at' => Carbon::parse('2025-04-10 20:35:01'),
                'updated_at' => Carbon::parse('2025-04-10 20:35:01'),
            ],
            [
                'id' => 32,
                'image' => '1744342516.jpg',
                'judul' => 'pondok romadhon',
                'created_at' => Carbon::parse('2025-04-10 20:35:16'),
                'updated_at' => Carbon::parse('2025-04-10 20:35:16'),
            ],
            [
                'id' => 33,
                'image' => '1744342573.jpg',
                'judul' => 'bagi takjil',
                'created_at' => Carbon::parse('2025-04-10 20:36:13'),
                'updated_at' => Carbon::parse('2025-04-10 20:36:13'),
            ],
            [
                'id' => 34,
                'image' => '1744342587.jpg',
                'judul' => 'bagi takjil',
                'created_at' => Carbon::parse('2025-04-10 20:36:27'),
                'updated_at' => Carbon::parse('2025-04-10 20:36:27'),
            ],
            [
                'id' => 36,
                'image' => '1744342621.jpg',
                'judul' => 'halal bihalal',
                'created_at' => Carbon::parse('2025-04-10 20:37:01'),
                'updated_at' => Carbon::parse('2025-04-10 20:37:01'),
            ],
            [
                'id' => 38,
                'image' => '1745657036.jpg',
                'judul' => 'halal bihalal',
                'created_at' => Carbon::parse('2025-04-26 01:43:56'),
                'updated_at' => Carbon::parse('2025-04-26 01:43:56'),
            ],
        ];

        foreach ($photos as $photo) {
            Photo::create($photo);
        }
    }
}