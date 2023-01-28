<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Pobitro Debnath',
                'email' => 'pobitro@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Rk1Nmrf6iHnR8WURdDAbwOYTRSjtgJhF9i4VD4hesDRMlZJ8TOVW6',
                'remember_token' => NULL,
                'created_at' => '2023-01-27 14:01:21',
                'updated_at' => '2023-01-27 14:01:21',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Pobitro Debnath',
                'email' => 'pobitrod@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Kp6qq.TUgAeSsGNd3L/0s.gT3SWXQCK5rh34CQGxwt67IbWhIXfSC',
                'remember_token' => NULL,
                'created_at' => '2023-01-27 14:01:58',
                'updated_at' => '2023-01-27 14:01:58',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Pobitro Debnath',
                'email' => 'pobitroddse@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.GpSecOY9tJWcpBI6KTwnOUYsmKFzTvilxBapmiY/AdNSyOqRdG.G',
                'remember_token' => NULL,
                'created_at' => '2023-01-27 14:13:53',
                'updated_at' => '2023-01-27 14:13:53',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Pobitro Debnath',
                'email' => 'drfr@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XTnPOgDR3cINn5aYzxugRuc6IFf6Fy7r/v5MF4leSDalZBttEVfVK',
                'remember_token' => NULL,
                'created_at' => '2023-01-27 14:47:30',
                'updated_at' => '2023-01-27 14:47:30',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Pobitro Debnath',
                'email' => 'pobitroy@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aNe6wIYKmX8pXIplebQdYOi2qwhLoMUjdmRp353hNsiWqICOS9Q16',
                'remember_token' => NULL,
                'created_at' => '2023-01-27 14:48:22',
                'updated_at' => '2023-01-27 14:48:22',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Pobitro Roy',
                'email' => 'techlook@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kwhtukNNvQuOonxAGyy28uTcVC07ZFOwJG4TLbZaHVP5DbzpgiAV.',
                'remember_token' => NULL,
                'created_at' => '2023-01-27 14:49:10',
                'updated_at' => '2023-01-27 14:49:10',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'KeyaMoni Roy',
                'email' => 'thetork@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ckFjTB0SLbv6vbnThkEa.ejaT0g5pxMQNZSjE6/71QxXS0GO0.3By',
                'remember_token' => NULL,
                'created_at' => '2023-01-27 14:50:29',
                'updated_at' => '2023-01-27 14:50:29',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'KeyaMoni Roy',
                'email' => 'dd@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$X/dfjNaE7G4fUPmhmKj.buT.gInvSLF3zBgYlPYLLNlr.cwsvaT5e',
                'remember_token' => NULL,
                'created_at' => '2023-01-27 14:52:35',
                'updated_at' => '2023-01-27 14:52:35',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Mahidul Vai',
                'email' => 'mahidul@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UjRoSSIxuHI0VxsnzXASS.mpGvq/U4pMO8cUv6/YNZOWrfd1ML2CS',
                'remember_token' => NULL,
                'created_at' => '2023-01-28 16:00:49',
                'updated_at' => '2023-01-28 16:00:49',
            ),
        ));


    }
}
