<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            [
                'name' => 'お酒',
            ],
            [
                'name' => '一品料理',
            ],
            [
                'name' => 'おつまみ',
            ]
        ];
        foreach($params as $param){
            DB::table('categories')->insert([
                'name' => $param['name'],
                'delete_flg' => 0,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
    }
}
