<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
        		'tim' => 'admin',
	            'email' => 'admin@ccomp.com',
	            'password' => bcrypt('pwdadmin'),
	            'lomba' => 'Line Follower',
	            'hp' => '081286119441',
	            'role' => 'admin',
        	],
        	[
        		'tim' => 'timcp',
	            'email' => 'timcp@ccomp.com',
	            'password' => bcrypt('pwdtimcp'),
	            'lomba' => 'CP',
	            'hp' => '08'.$this->randomStringNumber(),
	            'role' => 'tim',
        	],
            [
                'tim' => 'timlf',
                'email' => 'timlf@ccomp.com',
                'password' => bcrypt('pwdtimlf'),
                'lomba' => 'Line Follower',
                'hp' => '08'.$this->randomStringNumber(),
                'role' => 'tim',
            ],
        ]);
    }

    private function randomStringNumber($length = 10) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
