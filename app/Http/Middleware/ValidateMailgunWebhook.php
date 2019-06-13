<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class ValidateMailgunWebhook
{
    /**
     * @param          $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->isMethod('post')) {
            abort(Response::HTTP_FORBIDDEN, 'Only POST requests are allowed.');
        }

        if ($this->verify($request)) {
            return $next($request);
        }

        abort(Response::HTTP_FORBIDDEN);
    }

    /**
     * @param $request
     *
     * @return bool
     */
    protected function verify($request): bool
    {
        if (abs(time() - $request->input('timestamp')) > 15) {
            return false;
        }

        return $this->buildSignature($request) === $request->input('signature');
    }

    /**
     * @param $request
     *
     * @return string
     */
    protected function buildSignature($request): string
    {
        return hash_hmac('sha256', sprintf('%s%s', $request->input('timestamp'), $request->input('token')), config('services.mailgun.secret'));
    }
}
