<?php

use App\Agent;
use App\Course;
use App\Paket;
use App\SubCourse;
use App\TransactionCourse;
use Illuminate\Database\Seeder;

class PaketCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Paket::class, 1)->create();
        factory(Course::class, 10)->create();
        Course::get()->each(function($u) {
            $u->agent()->save(factory(Agent::class)->make());
        });
        Course::get()->each(function($u) {
            $u->transactionsCourse()->save(factory(TransactionCourse::class)->make());
        });
        SubCourse::create([
            'course_id' => 1,
            'name' => 'install ig',
            'value' => '<p><video controls="" src="http://127.0.0.1:8000/storage/course/auth-bg.mp4" class="note-video-clip" width="640" height="360"></video><br></p>',
            'sequence' => 1
        ]);
    }
}
