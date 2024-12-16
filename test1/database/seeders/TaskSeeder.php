<!-- <?php

// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\Seeder;
// use App\Models\Task;
// use Faker\Factory as Faker;

// class TaskSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         $faker = Faker::create();
//         //tao 10 ban ghi
//         foreach (range(1, 10) as $index) {
//             Task::create([
//                 'title' => $faker->sentence(),
//                 'description' => $faker->paragraph(),
//                 'long_description' => $faker->optional()->text(),
//                 'completed' => $faker->boolean(),
//             ]);
//         }
//     }
// }
