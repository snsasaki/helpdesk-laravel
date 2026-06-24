<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'PC が起動しない', 'content' => '朝から電源を入れても反応がありません。', 'status' => 'pending'],
            ['title' => '社内 Wi-Fi に接続できない', 'content' => '昨日から急に繋がらなくなりました。', 'status' => 'in_progress'],
            ['title' => 'パスワードをリセットしたい', 'content' => 'ロックアウトされてしまいました。', 'status' => 'completed'],
        ];

        foreach ($data as $item) {
            \App\Models\Contact::create($item);
        }
    }
}
