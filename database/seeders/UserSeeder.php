<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        // $2y$12$.cE.IBARN7LVrY8VG.MWveBhJ4OmD3U0wb.u7NWR8moGlHfggVwv.
        // User::factory(10)->create();

        $users = array(
            array('id' => '1','name' => 'G.M. Zesan','email' => 'gmzesan7767@gmail.com','email_verified_at' => NULL,'password' => bcrypt('12345678aA'),'remember_token' => NULL,'created_at' => '2024-09-15 08:53:25','updated_at' => '2024-09-15 10:29:34','bio' => 'Developer','avatar' => 'avatars/v2CCExTLABax6UkyVt9ESqH33TulQfKmf24UqKSq.png')
        );

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
