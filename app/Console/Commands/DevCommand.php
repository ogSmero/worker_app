<?php

namespace App\Console\Commands;

use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develops';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $worker = Worker::find(1);
        $profile = Profile::find(1);

        dd($worker->profile->toArray());

        return 0;
    }

    private  function prepareData() {
        $workerData = [
            'name' => 'Sany',
            'surname' => 'Soonu',
            'email' => 'sany@mail.com',
            'age' => '21',
            'description' => 'Somee desc',
            'is_married' => false
        ];
        $worker = Worker::create($workerData);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'Tokio',
            'skill' => 'Coder',
            'experience' => 5,
            'finished_study_at' => "2020-06-01",
        ];
        $profile = Profile::create($profileData);
    }
}
