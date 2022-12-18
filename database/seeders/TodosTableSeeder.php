<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'todo_name' => 'テスト１',
        ];
        Todo::create($param);
        $param = [
            'todo_name' => 'テスト２',
        ];
        Todo::create($param);
        $param = [
            'todo_name' => 'テスト３',
        ];
        Todo::create($param);
    }
}
