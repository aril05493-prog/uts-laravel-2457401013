<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            ['Toyota','Avanza','B 1234 KJA',2021,350000,'2026-09-12',true,'Transmisi manual','Putih'],
            ['Honda','Brio','B 2045 TRS',2022,300000,'2026-10-01',false,null,'Merah'],
            ['Hyundai','Creta','D 1789 AB',2023,500000,'2026-08-20',true,'Termasuk asuransi','Hitam'],
            ['Toyota','Innova','A 1122 BC',2020,450000,'2026-07-15',true,'Kondisi terawat','Silver'],
            ['Honda','Jazz','B 3344 CD',2019,325000,'2026-09-03',true,'Irit bahan bakar','Putih'],
            ['Hyundai','Stargazer','A 5566 DE',2024,550000,'2026-10-10',false,'Servis berkala','Abu-abu'],
            ['Toyota','Rush','B 7788 FG',2022,425000,'2026-06-22',true,null,'Hitam'],
            ['Honda','Mobilio','A 9900 HI',2018,275000,'2026-05-19',true,'Kapasitas 7 penumpang','Putih'],
            ['Toyota','Calya','B 1212 JK',2021,250000,'2026-08-11',true,'Cocok untuk keluarga','Merah'],
            ['Hyundai','Ioniq 5','D 3434 LM',2023,900000,'2026-10-05',false,'Mobil listrik','Biru'],
            ['Honda','HR-V','B 5656 NO',2024,600000,'2026-09-28',true,'Transmisi otomatis','Silver'],
            ['Toyota','Yaris','A 7878 PQ',2020,325000,'2026-07-30',true,null,'Kuning'],
            ['Hyundai','Palisade','B 9090 RS',2022,850000,'2026-08-17',true,'SUV premium','Hitam'],
        ];

        foreach ($cars as $car) {
            Car::create([
                'brand' => $car[0], 'model' => $car[1], 'plate_number' => $car[2],
                'year' => $car[3], 'daily_rate' => $car[4], 'last_service_at' => $car[5],
                'is_available' => $car[6], 'notes' => $car[7], 'color' => $car[8],
            ]);
        }
    }
}
