<?php

namespace Codesider;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class UploadCommand extends Command
{

    protected $signature = 'upload:process';

    protected $description = "Upload";

    public function handle()
    {
        $files = File::files('blogs');
    }

}
