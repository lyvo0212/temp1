<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
        		'name'		=>'huytran',
	            'gender' =>  '0',
	            'birthday' =>'1975/11/08',
	            'email' => 'huytran@gmail.com',
	            'password' => bcrypt('123456'),
	            'address'=>'09 le hong phong',
	            'phone'=>'0976655555',
	            'status'=>'1',
                'modified'=>'admin',
        	]);
        DB::table('members')->insert([
        		'name'	=>'vinhtran',
        		'gender' =>'0',
        		'birthday' => '1999/09/09',
        		'email' 	=> 'vinhtran@gmail.com',
        		'password' 	=> bcrypt('123456'), 
        		'address' =>'067 nguyen cong chu', 
        		'phone'		=>'0976655555', 
        		'status'	=>'1',
                'modified'=>'admin',
			]);
        DB::table('members')->insert([
        		'name'	=>'buutran',
        		'gender'=>'0',
        		'birthday'	=>'1989/11/11',
        		'email'	=>'buutran@gmail.com',
        		'password'	=>bcrypt('123456'), 
        		'address'	=>'099 linh đông', 
        		'phone'		=>'0976655555', 
        		'status'	=>'0',
                'modified'=>'admin',
     		]);
        
         DB::table('members')->insert([
                'name'  =>'quytbui',
                'gender'=>'0',
                'birthday'  =>'1999/20/11',
                'email' =>'quytbui@gmail.com',
                'password'  =>bcrypt('123456'), 
                'address'   =>'09 linh đông', 
                'phone'     =>'0976655555', 
                'status'    =>'0',
                'modified'=>'admin',
            ]);
          DB::table('members')->insert([
                'name'  =>'thoavo',
                'gender'=>'0',
                'birthday'  =>'1989/11/11',
                'email' =>'thoavo@gmail.com',
                'password'  =>bcrypt('123456'), 
                'address'   =>'032 linh đông', 
                'phone'     =>'0976655555', 
                'status'    =>'0',
                'modified'=>'admin',
            ]);
           DB::table('members')->insert([
                'name'  =>'lyvo',
                'gender'=>'0',
                'birthday'  =>'1979/10/11',
                'email' =>'lyvo@gmail.com',
                'password'  =>bcrypt('123456'), 
                'address'   =>'099 linh đông', 
                'phone'     =>'0976655555', 
                'status'    =>'0',
                'modified'=>'admin',
            ]);
            DB::table('members')->insert([
                'name'  =>'lulu',
                'gender'=>'0',
                'birthday'  =>'1989/11/11',
                'email' =>'lulu@gmail.com',
                'password'  =>bcrypt('123456'), 
                'address'   =>'098/66 linh đông', 
                'phone'     =>'0976655555', 
                'status'    =>'0',
                'modified'=>'admin',
            ]);
             DB::table('members')->insert([
                'name'  =>'buutran',
                'gender'=>'0',
                'birthday'  =>'1989/09/11',
                'email' =>'buutran@gmail.com',
                'password'  =>bcrypt('123456'), 
                'address'   =>'099 linh đông', 
                'phone'     =>'0976655555', 
                'status'    =>'0',
                'modified'=>'admin',
            ]);
              DB::table('members')->insert([
                'name'  =>'khia',
                'gender'=>'0',
                'birthday'  =>'1989/11/11',
                'email' =>'khia@gmail.com',
                'password'  =>bcrypt('123456'), 
                'address'   =>'099 linh đông', 
                'phone'     =>'0976655555', 
                'status'    =>'0',
                'modified'=>'admin',
            ]);
               DB::table('members')->insert([
                'name'  =>'luuly',
                'gender'=>'0',
                'birthday'  =>'1989/11/11',
                'email' =>'luuly@gmail.com',
                'password'  =>bcrypt('123456'), 
                'address'   =>'099 linh đông', 
                'phone'     =>'0976655555', 
                'status'    =>'0',
                'modified'=>'admin',
            ]);
    }
}
