<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video')->insert([
            'username' => 'jalexrosa',
            'nama_video' => '1 mont for this one, watch until the end!',
            'jum_like' => 722100,
            'jum_play' => 3300000,
            'jum_komentar' => 5249,
            'jum_share' => 9717
            ]);
    }
}
