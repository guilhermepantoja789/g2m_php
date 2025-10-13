<?php
namespace Database\Seeders;
use App\Models\Cliente;
use Illuminate\Database\Seeder;
class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create(['nome' => 'Netflix']);
        Cliente::create(['nome' => 'Google']);
        Cliente::create(['nome' => 'Amazon']);
    }
}
