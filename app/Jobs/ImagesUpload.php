<?php

namespace App\Jobs;

use Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ImagesUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    private $imageNam;

    public function __construct($imageNam)
    {
        $this->imageNam = $imageNam;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       // $imageName = $this->main_image->storeAs('uploads','public');
        Storage::disk('public')->put($this->imageNam, 'Contents');

    }
}
