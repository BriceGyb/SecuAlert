<?php



namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AlertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = ['Casablanca', 'Rabat', 'Kenitra', 'Mohamedia', 'Bousnika'];
        $types = ['vol', 'viol', 'meurtre', 'agression', 'incendie'];
        $privacyOptions = ['public', 'private'];

        for ($i = 0; $i < 170; $i++) {
            DB::table('alerts')->insert([
                'user_id' => rand(1, 10), // Assuming you have user IDs from 1 to 10
                'title' => Str::random(10),
                'description' => Str::random(50),
                'type' => $types[array_rand($types)],
                'ville' => $cities[array_rand($cities)],
                'level' => rand(1, 5),
                'privacy' => $privacyOptions[array_rand($privacyOptions)],
                'is_adressed' => (bool)rand(0, 1),
                'reaction' => rand(0, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
   