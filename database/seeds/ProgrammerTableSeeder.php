<?php

use Illuminate\Database\Seeder;
use App\Programmer;

class ProgrammerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Programmer::insert([['id'=>'143','name'=>'hamzah','password'=>'258','email'=>"hamzah@gmail.com"],
							['id'=>'586','name'=>'erra','password'=>'639','email'=>"erra@gmail.com"]
		
		]);
    }
}
