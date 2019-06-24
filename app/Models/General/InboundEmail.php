<?php

namespace App\Models\General;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\General\InboundEmail
 *
 * @property int                             $id
 * @property string                          $body_plain
 * @property string                          $date
 * @property string                          $domain
 * @property string                          $from
 * @property string                          $from_full
 * @property string                          $message_headers
 * @property string                          $message_id
 * @property string                          $message_url
 * @property string                          $recipient
 * @property string                          $sender
 * @property string                          $stripped_html
 * @property string|null                     $stripped_signature
 * @property string                          $stripped_text
 * @property string                          $subject
 * @property string                          $response_timestamp
 * @property string                          $token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|InboundEmail newModelQuery()
 * @method static Builder|InboundEmail newQuery()
 * @method static Builder|InboundEmail query()
 * @method static Builder|InboundEmail whereBodyPlain($value)
 * @method static Builder|InboundEmail whereCreatedAt($value)
 * @method static Builder|InboundEmail whereDate($value)
 * @method static Builder|InboundEmail whereDomain($value)
 * @method static Builder|InboundEmail whereFrom($value)
 * @method static Builder|InboundEmail whereFromFull($value)
 * @method static Builder|InboundEmail whereId($value)
 * @method static Builder|InboundEmail whereMessageHeaders($value)
 * @method static Builder|InboundEmail whereMessageId($value)
 * @method static Builder|InboundEmail whereMessageUrl($value)
 * @method static Builder|InboundEmail whereRecipient($value)
 * @method static Builder|InboundEmail whereResponseTimestamp($value)
 * @method static Builder|InboundEmail whereSender($value)
 * @method static Builder|InboundEmail whereStrippedHtml($value)
 * @method static Builder|InboundEmail whereStrippedSignature($value)
 * @method static Builder|InboundEmail whereStrippedText($value)
 * @method static Builder|InboundEmail whereSubject($value)
 * @method static Builder|InboundEmail whereToken($value)
 * @method static Builder|InboundEmail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class InboundEmail extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'body_plain',
        'date',
        'domain',
        'from',
        'from_full',
        'message_headers',
        'message_id',
        'message_url',
        'recipient',
        'sender',
        'stripped_html',
        'stripped_signature',
        'stripped_text',
        'subject',
        'response_timestamp',
        'token',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return null;
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'inbound_emails_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        return $this->toArray();
    }
}
