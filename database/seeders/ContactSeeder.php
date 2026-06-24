<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create(['title' => 'PC が起動しない', 'detail' => '朝から電源を入れても反応がありません。', 'status' => 'pending']);
        Contact::create(['title' => '社内 Wi-Fi に接続できない', 'detail' => '昨日から急に繋がらなくなりました。', 'status' => 'in_progress']);
        Contact::create(['title' => 'パスワードをリセットしたい', 'detail' => 'ロックアウトされてしまいました。', 'status' => 'completed']);
    }
}
