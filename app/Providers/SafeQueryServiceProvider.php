<?php

namespace App\Providers;

use App\General\DCASHelper;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

/**
 * Class SafeQueryServiceProvider
 *
 * @package App\Providers
 *
 * @see     https://medium.com/studocu-techblog/how-to-deal-with-database-master-slave-replication-delay-in-laravel-dab872a09a3f
 */
class SafeQueryServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $safeCall = function ($method, $arguments) {
            $query = $this->getQuery();
            // First we try to get the results of the untouched method.
            $result = $this->$method(...$arguments);

            $isCollectionResult = $result instanceof Collection;

            // If we are already using the write connection,
            // or we got a non-empty result, we return it.
            if ($query->useWritePdo // If it's a collection, we check that it's not emptyconnectionHasconnectionHasSameReadAndWriteconnectionHasSameReadAndWriteconnectionHasSameReadAndWriteSameReadAndWrite
                || ($isCollectionResult && $result->isNotEmpty()) // If it's not a collection, it's a model, so we check it's not null
                || (! $isCollectionResult && ! is_null($result))) {
                return $result;
            }

            $connectionName = $query->getConnection()->getConfig('name');

            // If the write connection is equal to the read connection, there's
            // no need to try again on the write PDO, so we return the empty result.
            if (! DCASHelper::connectionHasSameReadAndWrite($connectionName)) {
                return $result;
            }

            // We try the same call, but now on the write connection.
            return $this->useWritePdo()->$method(...$arguments);
        };

        Builder::macro('safeGet', function (...$arguments) use ($safeCall) {
            return $safeCall->call($this, 'get', $arguments);
        });
        Builder::macro('safeFind', function (...$arguments) use ($safeCall) {
            return $safeCall->call($this, 'find', $arguments);
        });
        Builder::macro('safeFirst', function (...$arguments) use ($safeCall) {
            return $safeCall->call($this, 'first', $arguments);
        });
        Builder::macro('safePluck', function (...$arguments) use ($safeCall) {
            return $safeCall->call($this, 'pluck', $arguments);
        });

        Builder::macro('safeFindOrFail', function (...$arguments) {
            $query = $this->getQuery();
            // Instead of analyzing the output, we just catch the exception
            try {
                return $this->findOrFail(...$arguments);
            } catch (ModelNotFoundException $e) {
                $connectionName = $query->getConnection()->getConfig('name');

                // If we are already using the write connection,
                // or if the write connection is equal to the write
                // connection, there's no need to try again on the write PDO,
                // so we will throw again the same ModelNotFound exception.
                if ($query->useWritePdo || ! DCASHelper::connectionHasSameReadAndWrite($connectionName)) {
                    throw $e;
                }

                // We try the same call, but now on the write connection.
                return $this->useWritePdo()->findOrFail(...$arguments);
            }
        });
    }

    /**
     * //Loading relationships is a bit trickier.
     * //Basically we have to be aware of a couple things:
     * //a) The relation is not loaded yet. If so, we don’t have to re-run it.
     * //b) If we are dealing with a belongsTo (for example), we have to use ->safeFirst() ; if it is belongsToMany, it’s ->safeGet()
     * //c) Don’t forget to set the relation so it can be accessed by using $user->profile
     **/
    //public function safeLoadProfile(User $user): User
    //{
    //    if ($user->relationLoaded('profile')) {
    //        // If the relation is already loaded, and it's
    //        // not null, means we don't have to load it again.
    //        return $user;
    //    }
    //
    //    $profile = $user->profile()->safeFirst();
    //
    //    return $user->setRelation('profile', $profile);
    //}
}
