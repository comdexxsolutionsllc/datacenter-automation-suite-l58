<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\SecurityGroup
 *
 * @property int                             $id
 * @property string                          $security_group_serial
 * @property string                          $source
 * @property string                          $direction
 * @property string                          $protocol
 * @property mixed                           $port_range
 * @property string|null                     $comments
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|SecurityGroup newModelQuery()
 * @method static Builder|SecurityGroup newQuery()
 * @method static Builder|SecurityGroup query()
 * @method static Builder|SecurityGroup whereComments($value)
 * @method static Builder|SecurityGroup whereCreatedAt($value)
 * @method static Builder|SecurityGroup whereDirection($value)
 * @method static Builder|SecurityGroup whereId($value)
 * @method static Builder|SecurityGroup wherePortRange($value)
 * @method static Builder|SecurityGroup whereProtocol($value)
 * @method static Builder|SecurityGroup whereSecurityGroupSerial($value)
 * @method static Builder|SecurityGroup whereSource($value)
 * @method static Builder|SecurityGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SecurityGroup extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'security_group_serial',
        'source',
        'direction',
        'protocol',
        'port_range',
        'comments',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        // TODO: Implement path() method.
        //
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'security_group_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}
