<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Laravel 8.8',
            'slug' => Str::slug('Laravel 8.8')
        ]);

        Channel::create([
            'name' => 'Vue js 3',
            'slug' => Str::slug('Vue js 3')
        ]);

        Channel::create([
            'name' => 'Angular 7',
            'slug' => Str::slug('Angular 7')
        ]);

        Channel::create([
            'name' => 'Node js',
            'slug' => Str::slug('Node js')
        ]);
    }
}
