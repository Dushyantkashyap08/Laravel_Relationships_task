<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Contact,
    Contactinformation
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'abc',
            'email' => 'abc@ok.com',
            'password' => bcrypt('password')
        ]);

        Contact::create([
            'user_id' => '1',
            'phone_no' => '32847930299',
            'address' => 'Address test'
        ]);

        Contactinformation::create([
            'contact_id' => '1',
            'pincode' => '32847930299',
            'near_by' => 'Address test',
            'extra_detail' =>'more info about the address'
        ]);
    }
}
