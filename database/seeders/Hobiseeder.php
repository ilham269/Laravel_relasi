<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hobi;
use App\Models\Mahasiswa;

class Hobiseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Buat beberapa hobi
        $hobi1 = Hobi::create(['nama_hobi' => 'Membaca Buku']);
        $hobi2 = Hobi::create(['nama_hobi' => 'Bermain catur']);
        $hobi3 = Hobi::create(['nama_hobi' => 'Bernyanyi']);
        $hobi4 = Hobi::create(['nama_hobi' => 'Coding']);

        // Ambil semua mahasiswa
        $mahasiswas = Mahasiswa::all();

        // Assign hobi ke setiap mahasiswa (random)
        foreach ($mahasiswas as $mhs) {
            $randomHobi = [$hobi1->id, $hobi2->id, $hobi3->id, $hobi4->id];
            shuffle($randomHobi);
            $mhs->hobis()->attach(array_slice($randomHobi, 0, rand(1, 3)));
        }
        }   
}
