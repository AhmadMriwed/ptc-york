<?php

namespace Database\Seeders\MailBox;

use App\Models\MailBox\RequestBox;
use App\Models\Media\Files;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestBoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RequestBox::factory(300)->has(Files::factory(fake()->randomElement([0,1,2,3,4,10])),'files')->create();
 
    }
}
