<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengurus;

class PengurusSeeder extends Seeder
{
    public function run(): void
    {
        $data_pengurus = [
            [
                'nama_lengkap' => 'Ahmad Azaruddin',
                'jabatan' => 'Ketua Umum',
                'email' => 'ahmadazarruddin@gmail.com',
                'foto_url' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400', // Ganti dengan link foto asli nanti
                'instagram_url' => 'https://www.instagram.com/arzjar_____/', // Ganti dengan link Instagram asli nanti
            ],
            [
                'nama_lengkap' => 'M Rehan Agusti',
                'jabatan' => 'Bendahara Umum',
                'email' => 'rehan@organisasi.com',
                'foto_url' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400',
                'instagram_url' => 'https://www.instagram.com/rynnz28_/', // Ganti dengan link Instagram asli nanti
            ],
            [
                'nama_lengkap' => 'Muhamad daffa Yozad',
                'jabatan' => 'Wakil Ketua I',
                'email' => 'daffa@gmail.com',
                'foto_url' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400',
                'instagram_url' => 'https://www.instagram.com/den_salafy/', // Ganti dengan link Instagram asli nanti
            ],
            [
                'nama_lengkap' => 'Akhdan Fadhil santoso',
                'jabatan' => 'Wakil Ketua II',
                'email' => 'akhdanfadhil@gmail.com',
                'foto_url' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400',
                'instagram_url' => 'https://www.instagram.com/den_salafy/', // Ganti dengan link Instagram asli nanti
            ],
            [
                'nama_lengkap' => 'Arifan Nugraha',
                'jabatan' => 'Wakil Ketua III',
                'email' => 'arifan@gmail.com',
                'foto_url' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400',
                'instagram_url' => 'https://www.instagram.com/den_salafy/', // Ganti dengan link Instagram asli nanti
            ],
            [
                'nama_lengkap' => 'Alif Hadi Pratama',
                'jabatan' => 'Koordinator Kaderisasi',
                'email' => 'alifhadi@gmail.com',
                'foto_url' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400',
                'instagram_url' => 'https://www.instagram.com/den_salafy/', // Ganti dengan link Instagram asli nanti
            ],
            [
                'nama_lengkap' => 'Iqbal Ramhdan',
                'jabatan' => 'Koordinator Keagamaan',
                'email' => 'iqbal@gmail.com',
                'foto_url' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400',
                'instagram_url' => 'https://www.instagram.com/den_salafy/', // Ganti dengan link Instagram asli nanti
            ],
            [
                'nama_lengkap' => 'Wildan Habibur Rahman',
                'jabatan' => 'Koordinator Media dan Informasi',
                'email' => 'wildan@gmail.com',
                'foto_url' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400',
                'instagram_url' => 'https://www.instagram.com/den_salafy/', // Ganti dengan link Instagram asli nanti
            ],
            [
                'nama_lengkap' => 'M Dzikri Dewantara',
                'jabatan' => 'Koordinator Seni, Minat, dan Bakat',
                'email' => 'dzikri@gmail.com',
                'foto_url' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400',
                'instagram_url' => 'https://www.instagram.com/den_salafy/', // Ganti dengan link Instagram asli nanti
            ],
            [
                'nama_lengkap' => 'ipan Giyo saputra',
                'jabatan' => 'Koordinator BUMR',
                'email' => 'ipan@gmail.com',
                'foto_url' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400',
                'instagram_url' => 'https://www.instagram.com/den_salafy/', // Ganti dengan link Instagram asli nanti
            ],
            [
                'nama_lengkap' => 'Abiyasa Fadli akbar',
                'jabatan' => 'Sekretaris Umum',
                'email' => 'abiyasafadliakbar03@gmail.com',
                'foto_url' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400',
                'instagram_url' => 'https://www.instagram.com/den_salafy/', // Ganti dengan link Instagram asli nanti
            ],
            // Anda bisa tambahkan copy-paste blok di atas untuk anggota lainnya
        ];

        // Memasukkan data ke database
        foreach ($data_pengurus as $data) {
            Pengurus::updateOrCreate(
                ['email' => $data['email']], // Kolom unik sebagai kunci pencarian
                [
                    'nama_lengkap' => $data['nama_lengkap'],
                    'jabatan' => $data['jabatan'],
                    'foto_url' => $data['foto_url'],
                    'instagram_url' => $data['instagram_url'],
                ]
            );
        }
    }
}

