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
        $password = Hash::make('password');
        $datas = [
            [
                'domain' => [
                    'name' => 'example.com',
                    'home' => '/home/user/mail',
                    'uid' => 1000,
                    'gid' => 1000
                ],
                'accounts' => [
                    [
                        'email' => 'postmaster',
                        'passwords' => [$password]
                    ],
                ],
            ],
            [
                'domain' => [
                    'name' => 'example.org',
                    'home' => '/home/user2/mail',
                    'uid' => 1001,
                    'gid' => 1001
                ],
                'accounts' => [
                    [
                        'email' => 'postmaster',
                        'passwords' => [$password]
                    ],
                ],
            ]
        ];

        foreach ($datas as $data) {
            $domain = VirtualDomain::factory()->create([
                'name' => $data['domain'],
                'home' => $data['home'],
                'uid' => $data['uid'],
                'gid' => $data['gid']
            ]);

            foreach ($data['accounts'] as $account) {
                VirtualUser::factory()->create([
                    'virtual_domain_id' => $domain->id,
                    'email' => $account['email'],
                    'password' => $account['password'],
                ]);
            }
        }
    }
}
