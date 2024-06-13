<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendMail extends Command
{
    
    protected $signature = 'users:sendmail';

    
    protected $description = 'Send Mail to all the users by running this command';

   
    public function handle()
    {
        return Command::SUCCESS;
    }
}
