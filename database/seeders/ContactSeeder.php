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
        $contacts = [
            [
                'name' => 'guga',
                'email' => 'guga@sobaka',
                'telegram' => 'ssilka',
                'message' => 'aaaaaaaaaaaaaaaaaaaa kebab s kuricey oaoaooaoaoao',
                'status' => 'cancel',
            ],
            [
                'name' => 'guga',
                'email' => 'guga@sobaka',
                'telegram' => 'ssilka',
                'message' => null,
                'status' => 'complited',
            ],
            [
                'name' => 'guga',
                'email' => 'guga@sobaka',
                'telegram' => 'ssilka',
                'message' => 'abutalabashuneba',
                'status' => 'waiting',
            ],
        ];
        foreach($contacts as $contact){
            Contact::create($contact);
        }
    }
}
