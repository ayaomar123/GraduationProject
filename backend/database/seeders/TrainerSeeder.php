<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Seeder;


class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'Mousab Salah',
            'phone' => '0599792332',
            'description' => 'مدرب متخصص في تصميم مواقع الويب وتطويرها ,مهندس حاسوب سابق في شركة يونفيايد ويعمل حاليا في شركة تريليوم كمطور لمواقع الويب .',
            'email' => 'mousab@gmail.om'
        ]);

        Trainer::create([
            'name' => 'Noor Mohammed',
            'phone' => '0592089291',
            'description' => 'مدرب متخصص في تطبيقات الموبايل يعمل لدى شركة ICT كمطور اندرويد  ',
            'email' => 'noor@gmail.om'
        ]);



    }
}
