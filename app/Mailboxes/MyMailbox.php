<?php

namespace App\Mailboxes;

use BeyondCode\Mailbox\InboundEmail;
use Log;

/**
 * Class MyMailbox
 *
 * @package App\Mailboxes
 */
class MyMailbox
{
    /**
     * @param \BeyondCode\Mailbox\InboundEmail $email
     */
    public function __invoke(InboundEmail $email)
    {
        Log::warn($email);
    }
}
