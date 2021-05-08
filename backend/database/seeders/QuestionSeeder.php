<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Q1
        Question::create([
            'question_body' => '3,5,8,13,21,...',
            'department_id' => '1'
        ]);

        Answer::create([
            'question_id' => '1',
            'answer'=> '20',
            'weight'=> '0',
        ]);

        Answer::create([
            'question_id' => '1',
            'answer'=> '45',
            'weight'=> '0',
        ]);

        Answer::create([
            'question_id' => '1',
            'answer'=> '55',
            'weight'=> '0',
        ]);

        Answer::create([
            'question_id' => '1',
            'answer'=> '34',
            'weight'=> '100',
        ]);

        //Q2
        Question::create([
            'question_body' => '1,2,3,6,12,...',
            'department_id' => '1'
        ]);
        Answer::create([
            'question_id' => '2',
            'answer'=> '24',
            'weight'=> '100',
        ]);

        Answer::create([
            'question_id' => '2',
            'answer'=> '18',
            'weight'=> '0',
        ]);

        Answer::create([
            'question_id' => '2',
            'answer'=> '13',
            'weight'=> '0',
        ]);

        Answer::create([
            'question_id' => '2',
            'answer'=> '34',
            'weight'=> '0',
        ]);

        //Q3
        Question::create([
            'question_body' => '2,3,3,6,12,...',
            'department_id' => '1'
        ]);
        Answer::create([
            'question_id' => '3',
            'answer'=> '61',
            'weight'=> '0',
        ]);

        Answer::create([
            'question_id' => '3',
            'answer'=> '60',
            'weight'=> '100',
        ]);

        Answer::create([
            'question_id' => '3',
            'answer'=> '62',
            'weight'=> '0',
        ]);

        Answer::create([
            'question_id' => '3',
            'answer'=> '64',
            'weight'=> '0',
        ]);

        //Q4
        Question::create([
            'question_body' => '
            what is answer of this Code?
                a = 4
                b = 5
                c = 2
                d = 6
                if b > a:
                b = 62
                    if c < d:
                        answer = 20 + b
                    else:
                        answer = 20 + c - d
                        d = a + b
                else:
                   answer = 40 + b
                   b = 0',
            'department_id' => '1'
        ]);
        Answer::create([
            'question_id' => '4',
            'answer'=> '82',
            'weight'=> '100',
        ]);

        Answer::create([
            'question_id' => '4',
            'answer'=> '16',
            'weight'=> '0',
        ]);

        Answer::create([
            'question_id' => '4',
            'answer'=> '45',
            'weight'=> '0',
        ]);


        //Q5
        Question::create([
            'question_body' => '؟هل أنت شخص صبور',
            'department_id' => '1'
        ]);
        Answer::create([
            'question_id' => '5',
            'answer'=> 'بنسبة كبيرة جداً',
            'weight'=> '80',
        ]);

        Answer::create([
            'question_id' => '5',
            'answer'=> 'بنسبة كبيرة',
            'weight'=> '20',
        ]);

        Answer::create([
            'question_id' => '5',
            'answer'=> 'أحياناً',
            'weight'=> '0',
        ]);


        //Q6
        Question::create([
            'question_body' => '؟هل تحب حل المسائل المعقدة والألغاز في المنطق؟',
            'department_id' => '1'
        ]);
        Answer::create([
            'question_id' => '6',
            'answer'=> 'بنسبة كبيرة جداً',
            'weight'=> '80',
        ]);
        Answer::create([
            'question_id' => '6',
            'answer'=> 'بنسبة كبيرة',
            'weight'=> '20',
        ]);
        Answer::create([
            'question_id' => '6',
            'answer'=> 'أحياناً',
            'weight'=> '0',
        ]);


        //Q7
        Question::create([
            'question_body' => 'هل تشعر بالفضول نحو التكنولوجيا والتقنيات الحديثة؟',
            'department_id' => '1'
        ]);
        Answer::create([
            'question_id' => '7',
            'answer'=> 'بنسبة كبيرة جداً',
            'weight'=> '80',
        ]);
        Answer::create([
            'question_id' => '7',
            'answer'=> 'بنسبة كبيرة',
            'weight'=> '20',
        ]);
        Answer::create([
            'question_id' => '7',
            'answer'=> 'أحياناً',
            'weight'=> '0',
        ]);


        //Q8
        Question::create([
            'question_body' => 'الرقم (264) يمثل :س بايت',
            'department_id' => '1'
        ]);
        Answer::create([
            'question_id' => '8',
            'answer'=> '33',
            'weight'=> '100',
        ]);

        Answer::create([
            'question_id' => '8',
            'answer'=> '3112',
            'weight'=> '0',
        ]);

    }
}
