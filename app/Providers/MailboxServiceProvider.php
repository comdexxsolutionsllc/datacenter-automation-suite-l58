<?php

namespace App\Providers;

use App\Mailboxes\Sales;
use App\Mailboxes\Support;
use BeyondCode\Mailbox\Facades\Mailbox;
use Illuminate\Support\ServiceProvider;

class MailboxServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $mailboxMatrix = [
        'sales'   => Sales::class,
        'support' => Support:: class,
    ];

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        foreach ($this->mailboxMatrix as $username => $class) {
            Mailbox::from(sprintf("%d@%s", $username, env('APP_DOMAIN')), $class);
        }
    }
}
