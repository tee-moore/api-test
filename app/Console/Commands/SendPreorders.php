<?php

namespace App\Console\Commands;

use App\Preorder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailAllPreorders;

class SendPreorders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'preorders:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command sends all preorders to admin@example.com';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
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
        $preorders = Preorder::with('movie')->get();
        Mail::to('admin@example.com')->send(new EmailAllPreorders($preorders));
    }
}
