<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class SkillUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SkillUp:user {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Hello USER';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this -> argument('name');
        $this -> info('Hello '.$name);
        //
    }
}
