<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class PropertyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            [
                'en' => 'Residential',
                'ar' => 'سكني',
            ],
            [
                'en' => 'Commercial',
                'ar' => 'تجاري',
            ],
            [
                'en' => 'Land',
                'ar' => 'أراضي',
            ],
            [
                'en' => 'Projects',
                'ar' => 'مشاريع',
            ],
            [
                'en' => 'Industrial',
                'ar' => 'صناعي',
            ],
            [
                'en' => 'Mixed Use',
                'ar' => 'متعدد الاستخدام',
            ],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name->en' => $category['en']],
                [
                    'name' => [
                        'en' => $category['en'],
                        'ar' => $category['ar'],
                    ],
                ]
            );
        }
    }
}
