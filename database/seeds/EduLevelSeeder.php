<?php

use Illuminate\Database\Seeder;

class EduLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edulevels')->insert([
            [
                'name'=>'SD Sederajat',
                'description'=> 'SD / MI'
            ],
            [
                'name'=>'SMP Sederajat',
                'description'=> 'SMP / MTS'
            ],
        ]);
    }
}
