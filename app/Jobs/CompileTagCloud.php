<?php

namespace App\Jobs;

use App\Models\General\TagCloud;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CompileTagCloud implements ShouldQueue
{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var \App\Models\General\TagCloud
     */
    protected $tagCloud;

    /**
     * Create a new job instance.
     *
     * @param \App\Models\General\TagCloud $tagCloud
     */
    public function __construct(TagCloud $tagCloud)
    {
        $this->tagCloud = $tagCloud;
    }

    /**
     * Execute the job.
     *
     */
    public function handle()
    {
    }

    /**
     * The job failed to process.
     *
     * @param \Exception $exception
     *
     */
    public function failed(Exception $exception)
    {
        // Send user notification of failure, etc...
    }
}
