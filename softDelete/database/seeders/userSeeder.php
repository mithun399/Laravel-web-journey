<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,200) as $value){
        $user=[
            ['name'=>'Mithun','email'=>'ms@gmail.com','password'=>'12345567']
        ];
    }
        return User::insert($user);
    }
}
