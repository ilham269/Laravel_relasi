<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class DosenMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen1 = Dosen::create([
            'nama' => 'Dr. Andi Nugraha',
            'nipd' => '10'
        ]);

        $dosen2 = Dosen::create([
            'nama' => 'Prof. Siti Rahmawati',
            'nipd' => '12'
        ]);
             $dosen1->mahasiswas()->createMany([
            ['nama' => 'ilhamm', 'nim' => '123456'],
            ['nama' => 'Rizky Ramadhan', 'nim' => '123457'],
        ]);

        $dosen2->mahasiswas()->createMany([
            ['nama' => 'Nur Aisyah', 'nim' => '123458'],
            ['nama' => 'Dewi Pertiwi', 'nim' => '123459'],
        ]);

    }
}
