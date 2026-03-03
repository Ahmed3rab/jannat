<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [

            // Residential
            ['en' => 'Apartment', 'ar' => 'شقة'],
            ['en' => 'Villa', 'ar' => 'فيلا'],
            ['en' => 'House', 'ar' => 'منزل'],
            ['en' => 'Duplex', 'ar' => 'دوبلكس'],
            ['en' => 'Penthouse', 'ar' => 'بنتهاوس'],
            ['en' => 'Studio', 'ar' => 'استوديو'],

            // Commercial
            ['en' => 'Office', 'ar' => 'مكتب'],
            ['en' => 'Shop', 'ar' => 'محل تجاري'],
            ['en' => 'Showroom', 'ar' => 'صالة عرض'],
            ['en' => 'Warehouse', 'ar' => 'مخزن'],
            ['en' => 'Factory', 'ar' => 'مصنع'],

            // Land
            ['en' => 'Residential Land', 'ar' => 'أرض سكنية'],
            ['en' => 'Commercial Land', 'ar' => 'أرض تجارية'],
            ['en' => 'Agricultural Land', 'ar' => 'أرض زراعية'],

        ];

        foreach ($types as $type) {
            Type::firstOrCreate(
                ['name->en' => $type['en']],
                [
                    'name' => [
                        'en' => $type['en'],
                        'ar' => $type['ar'],
                    ],
                ]
            );
        }
    }
}
