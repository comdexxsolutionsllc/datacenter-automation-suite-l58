<?php

use Laravel\Telescope\Http\Middleware\Authorize;
use Laravel\Telescope\Watchers;

return [
    'path' => 'telescope',

    /*
    |--------------------------------------------------------------------------
    | Telescope Storage Driver
    |--------------------------------------------------------------------------
    |
    | This configuration options determines the storage driver that will
    | be used to store Telescope's data. In addition, you may set any
    | custom options as needed by the particular driver you choose.
    |
    */

    'driver' => env('TELESCOPE_DRIVER', 'database'),

    'storage' => [
        'database' => [
            'connection' => env('DB_CONNECTION', 'mysql'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Record Pruning
    |--------------------------------------------------------------------------
    |
    | This configuration options determines how many Telescope records of
    | a given type will be kept in storage. This allows you to control
    | the amount of disk space claimed by Telescope's entry storage.
    |
    | When "null", records will not be pruned.
    |
    */

    'limit' => env('TELESCOPE_LIMIT', 500),

    /*
    |--------------------------------------------------------------------------
    | Telescope Route Middleware
    |--------------------------------------------------------------------------
    |
    | These middleware will be assigned to every Telescope route, giving you
    | the chance to add your own middleware to this list or change any of
    | the existing middleware. Or, you can simply stick with this list.
    |
    */

    'middleware' => [
        'web',
        Authorize::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Telescope Watchers
    |--------------------------------------------------------------------------
    |
    | The following array lists the "watchers" that will be registered with
    | Telescope. The watchers gather the application's profile data when
    | a request or task is executed. Feel free to customize this list.
    |
    */

    'watchers' => [
        Watchers\CacheWatcher::class        => env('TELESCOPE_CACHE_WATCHER', false),
        Watchers\CommandWatcher::class      => env('TELESCOPE_COMMAND_WATCHER', false),
        Watchers\DumpWatcher::class         => env('TELESCOPE_DUMP_WATCHER', false),
        Watchers\EventWatcher::class        => env('TELESCOPE_EVENT_WATCHER', false),
        Watchers\ExceptionWatcher::class    => env('TELESCOPE_EXCEPTION_WATCHER', false),
        Watchers\JobWatcher::class          => env('TELESCOPE_JOB_WATCHER', false),
        Watchers\LogWatcher::class          => env('TELESCOPE_LOG_WATCHER', false),
        Watchers\MailWatcher::class         => env('TELESCOPE_MAIL_WATCHER', false),
        Watchers\ModelWatcher::class        => env('TELESCOPE_MODEL_WATCHER', false),
        Watchers\NotificationWatcher::class => env('TELESCOPE_NOTIFICATION_WATCHER', false),

        Watchers\QueryWatcher::class => [
            'enabled' => env('TELESCOPE_QUERY_WATCHER', false),
            'slow'    => 100,
        ],

        Watchers\RedisWatcher::class    => env('TELESCOPE_REDIS_WATCHER', false),
        Watchers\RequestWatcher::class  => env('TELESCOPE_REQUEST_WATCHER', false),
        Watchers\ScheduleWatcher::class => env('TELESCOPE_SCHEDULE_WATCHER', false),
    ],
];
