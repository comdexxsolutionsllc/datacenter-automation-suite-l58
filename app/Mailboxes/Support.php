<?php

namespace App\Mailboxes;

use BeyondCode\Mailbox\InboundEmail;
use Log;

/**
 * Class Support
 *
 * @package App\Mailboxes
 */
class Support
{

    /**
     * @param \BeyondCode\Mailbox\InboundEmail $email
     */
    public function __invoke(InboundEmail $email)
    {
        /** @var InboundEmail $email */
        Log::debug($email);
    }
}
