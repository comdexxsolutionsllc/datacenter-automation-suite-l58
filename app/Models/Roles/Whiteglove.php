<?php

namespace App\Models\Roles;

use App\Models\Support\Ticket;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * App\Models\Roles\Whiteglove
 *
 * @property int                                                                                                            $id
 * @property string                                                                                                         $account_id
 * @property string                                                                                                         $name
 * @property string                                                                                                         $username
 * @property string                                                                                                         $email
 * @property bool|\DateTime                                                                                                 $email_verified_at
 * @property string                                                                                                         $password
 * @property string|null                                                                                                    $stripe_id
 * @property string|null                                                                                                    $card_brand
 * @property string|null                                                                                                    $card_last_four
 * @property bool|\DateTime                                                                                                 $trial_ends_at
 * @property string|null                                                                                                    $cover
 * @property string|null                                                                                                    $avatar
 * @property string|null                                                                                                    $remember_token
 * @property bool|\DateTime                                                                                                 $deleted_at
 * @property bool|\DateTime                                                                                                 $created_at
 * @property bool|\DateTime                                                                                                 $updated_at
 * @property string|null                                                                                                    $last_active
 * @property string|null                                                                                                    $cart_session_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[]                                       $clients
 * @property-read string                                                                                                    $cart_instance
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[]                           $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[]                                 $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Cashier\Subscription[]                                  $subscriptions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Support\Ticket[]                                     $tickets
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[]                                        $tokens
 * @method static Builder|Whiteglove newModelQuery()
 * @method static Builder|Whiteglove newQuery()
 * @method static Builder|BaseRole permission($permissions)
 * @method static Builder|Whiteglove query()
 * @method static Builder|BaseRole role($roles, $guard = null)
 * @method static Builder|Whiteglove whereAccountId($value)
 * @method static Builder|Whiteglove whereAvatar($value)
 * @method static Builder|Whiteglove whereCardBrand($value)
 * @method static Builder|Whiteglove whereCardLastFour($value)
 * @method static Builder|Whiteglove whereCartSessionId($value)
 * @method static Builder|Whiteglove whereCover($value)
 * @method static Builder|Whiteglove whereCreatedAt($value)
 * @method static Builder|Whiteglove whereDeletedAt($value)
 * @method static Builder|Whiteglove whereEmail($value)
 * @method static Builder|Whiteglove whereEmailVerifiedAt($value)
 * @method static Builder|Whiteglove whereId($value)
 * @method static Builder|Whiteglove whereLastActive($value)
 * @method static Builder|Whiteglove whereName($value)
 * @method static Builder|Whiteglove wherePassword($value)
 * @method static Builder|Whiteglove whereRememberToken($value)
 * @method static Builder|Whiteglove whereStripeId($value)
 * @method static Builder|Whiteglove whereTrialEndsAt($value)
 * @method static Builder|Whiteglove whereUpdatedAt($value)
 * @method static Builder|Whiteglove whereUsername($value)
 * @mixin \Eloquent
 */
class Whiteglove extends BaseRole
{

    /**
     * @var string
     */
    protected $guard = 'whitegloves';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'email_verified_at',
        'password',
        'stripe_id',
        'card_brand',
        'card_last_four',
        'trial_ends_at',
        'remember_token',
        'last_active',
    ];

    /**
     * @var string
     *
     * @SuppressWarnings(PHPMD.CamelCaseClassName)
     */
    protected $guard_name = 'whitegloves';

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'whitegloves_index';
    }

    ///**
    // * @return \Illuminate\Database\Eloquent\Relations\HasMany
    // */
    //public function tickets(): HasMany
    //{
    //    return $this->hasMany(\App\Models\Support\Ticket::class);
    //}

    /**
     * Get all of the whitegloves' tickets.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function tickets(): MorphMany
    {
        return $this->morphMany(Ticket::class, 'ticketable');
    }
}
