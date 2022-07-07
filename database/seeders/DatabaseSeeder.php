<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VirtualDomain;
use App\Models\VirtualUser;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        VirtualDomain::factory()->create(['name' => 'percapi.com.br']);

        $emails = [
            'adelmar@percapi.com.br',
            'batista@percapi.com.br',
            'celso@percapi.com.br',
            'eliseo@percapi.com.br',
            'francisco@percapi.com.br',
            'italo@percapi.com.br',
            'joao@percapi.com.br',
            'jose.luiz@percapi.com.br',
            'jovenilton@percapi.com.br',
            'postmaster@percapi.com.br',
            'percapi@percapi.com.br',
            'rafael@percapi.com.br',
            'roberto@percapi.com.br',
            'sergio@percapi.com.br',
            'ulisses@percapi.com.br',
            'willian@percapi.com.br'
        ];

        $pwd = Hash::make('wgprVsVK');

        foreach ($emails as $k => $email) {
            VirtualUser::factory()->create([
                'virtual_domain_id' => 1,
                'home' => '/home/percapi/shared/mail',
                'email' => $email,
                'password' => $pwd
            ]);
        }
    }
}
