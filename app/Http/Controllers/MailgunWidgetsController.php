<?php

namespace App\Http\Controllers;

use App\General\EmailParser;
use App\Http\Requests\MailgunRequest;
use App\Models\General\InboundEmail;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class MailgunWidgetsController extends Controller
{

    /**
     * @param \App\Http\Requests\MailgunRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(MailgunRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $data = new Collection((new EmailParser)::parse($validated));

        preg_match('^(?:\<)(.*?)(?:\>)^', $data->get('From'), $from);

        $from = new Collection($from);

        $result = [
            'body_plain'         => $data->get('body-plain'),
            'date'               => $data->get('Date') ? date('Y-m-d H:i:s', strtotime($data->get('Date'))) : now(),
            'domain'             => $data->get('domain'),
            'from'               => $from->last() ?? null,
            'from_full'          => $data->get('From'),
            'message_headers'    => $data->get('message-headers'),
            'message_id'         => $data->get('Message-Id'),
            'message_url'        => $data->get('message-url'),
            'recipient'          => $data->get('recipient'),
            'sender'             => $data->get('sender'),
            'stripped_html'      => $data->get('stripped-html'),
            'stripped_signature' => $data->get('stripped-signature'),
            'stripped_text'      => $data->get('stripped-text'),
            'subject'            => $data->get('subject'),
            'response_timestamp' => $data->get('timestamp') ? date('Y-m-d H:i:s', strtotime($data->get('timestamp'))) : now(),
            'token'              => $data->get('token'),
        ];

        InboundEmail::create($result);

        return response()->json([
            'status' => 'ok',
            'data'   => $result,
        ]);
    }
}
