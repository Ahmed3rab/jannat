<?php

namespace Database\Seeders;

use App\Enums\LocationLevel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Location;

class LibyaLocationSeeder extends Seeder
{
    public function run(): void
    {
        $libya = Location::firstOrCreate(
            ['slug' => 'libya', 'parent_id' => null],
            [
                'name' => [
                    'ar' => 'ليبيا',
                    'en' => 'Libya',
                ],
                'level' => LocationLevel::COUNTRY->value,
            ]
        );

        $cities = $this->cities();

        foreach ($cities as $cityNameEn => $cityData) {

            $city = Location::firstOrCreate(
                [
                    'slug' => Str::slug($cityNameEn),
                    'parent_id' => $libya->id,
                ],
                [
                    'name' => [
                        'ar' => $cityData['ar'],
                        'en' => $cityNameEn,
                    ],
                    'level' => LocationLevel::CITY->value,
                ]
            );

            foreach ($cityData['districts'] as $districtEn => $districtAr) {

                Location::firstOrCreate(
                    [
                        'slug' => Str::slug($districtEn),
                        'parent_id' => $city->id,
                    ],
                    [
                        'name' => [
                            'ar' => $districtAr,
                            'en' => $districtEn,
                        ],
                        'level' => LocationLevel::DISTRICT->value,
                    ]
                );
            }
        }
    }
    /**
     * @return array<string,array<string,mixed>>
     */
    protected function cities(): array
    {
        return [

            'Tripoli' => [
                'ar' => 'طرابلس',
                'districts' => [
                    'Hay Andalus' => 'حي الأندلس',
                    'Gargaresh' => 'قرقارش',
                    'Abu Salim' => 'أبو سليم',
                    'Souq Al Juma' => 'سوق الجمعة',
                    'Ben Ashour' => 'بن عاشور',
                    'Tajoura' => 'تاجوراء',
                    'Ain Zara' => 'عين زارة',
                ],
            ],

            'Benghazi' => [
                'ar' => 'بنغازي',
                'districts' => [
                    'Al Sabri' => 'الصابري',
                    'Al Keesh' => 'الكويفية',
                    'Al Hawari' => 'الهواري',
                    'Garyounis' => 'قاريونس',
                    'Bu Atni' => 'بوعطني',
                ],
            ],

            'Misrata' => [
                'ar' => 'مصراتة',
                'districts' => [
                    'Al Skirat' => 'السكيرات',
                    'Al Kararim' => 'الكراريم',
                    'Al Jazeera' => 'الجزيرة',
                ],
            ],

            'Zawiya' => [
                'ar' => 'الزاوية',
                'districts' => [
                    'Al Harsha' => 'الحرشة',
                    'Al Nasr' => 'النصر',
                ],
            ],

            'Zliten' => [
                'ar' => 'زليتن',
                'districts' => [
                    'Al Majer' => 'الماجر',
                    'Abu Rummana' => 'أبو رمانة',
                ],
            ],

            'Derna' => [
                'ar' => 'درنة',
                'districts' => [
                    'Al Fataeh' => 'الفتائح',
                    'Al Bab Tobruk' => 'باب طبرق',
                ],
            ],

            'Sabha' => [
                'ar' => 'سبها',
                'districts' => [
                    'Al Manshiya' => 'المنشية',
                    'Garda' => 'قردة',
                ],
            ],

        ];
    }
}
