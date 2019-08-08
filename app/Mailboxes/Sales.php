<?php

namespace App\Mailboxes;

use BeyondCode\Mailbox\InboundEmail;
use Log;

/**
 * Class Sales
 *
 * @package App\Mailboxes
 */
class Sales
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
