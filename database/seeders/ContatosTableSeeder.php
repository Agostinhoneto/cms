<?php

namespace Database\Seeders;

use App\Models\Contato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contato::create([
            'nome' => 'João',
            'telefone' => '123456789',
            'email' => 'joao@example.com',
        ]);

        Contato::create([
            'nome' => 'Maria',
            'telefone' => '987654321',
            'email' => 'maria@example.com',
        ]);
    }
}
