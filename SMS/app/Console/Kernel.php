<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

    // $today = Carbon::now();
    // $datetime2 = new DateTime($today);
    // $task = TaskMaster::all();
    // for($i=0;$i<$task->count();$i++)
    // {
    //     $datetime1 = new DateTime($task->from_date);
    //     $interval = $datetime2->diff($datetime1);
    //     $days = $interval->format('%a');
    //     if(($days-1)==15)
    //     {
    //         echo    $description;
    //     }
       
    // }
    
   
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('reminders:update')->daily();
        $schedule->command('notify:chiefsec')->daily();
        $schedule->command('notify:users')->daily();
        $schedule->command('notify:users15days')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
