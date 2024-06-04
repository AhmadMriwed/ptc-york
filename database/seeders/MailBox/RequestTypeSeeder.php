<?php

namespace Database\Seeders\MailBox;

use App\Models\MailBox\RequestType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RequestType::factory(20)->create(); 
    }
}
