<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\ControlPanel
 *
 * @property int                             $id
 * @property string                          $control_panel
 * @property int                             $free
 * @property string                          $frontend
 * @property string                          $backend
 * @property string                          $databases
 * @property string                          $dns
 * @property string                          $ftp
 * @property string                          $email
 * @property int                             $multi_server
 * @property string                          $operating_system
 * @property int                             $ipv6_enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|ControlPanel newModelQuery()
 * @method static Builder|ControlPanel newQuery()
 * @method static Builder|ControlPanel query()
 * @method static Builder|ControlPanel whereBackend($value)
 * @method static Builder|ControlPanel whereControlPanel($value)
 * @method static Builder|ControlPanel whereCreatedAt($value)
 * @method static Builder|ControlPanel whereDatabases($value)
 * @method static Builder|ControlPanel whereDns($value)
 * @method static Builder|ControlPanel whereEmail($value)
 * @method static Builder|ControlPanel whereFree($value)
 * @method static Builder|ControlPanel whereFrontend($value)
 * @method static Builder|ControlPanel whereFtp($value)
 * @method static Builder|ControlPanel whereId($value)
 * @method static Builder|ControlPanel whereIpv6Enabled($value)
 * @method static Builder|ControlPanel whereMultiServer($value)
 * @method static Builder|ControlPanel whereOperatingSystem($value)
 * @method static Builder|ControlPanel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ControlPanel extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'control_panel',
        'free',
        'frontend',
        'backend',
        'databases',
        'dns',
        'ftp',
        'email',
        'multi_server',
        'operating_system',
        'ipv6_enabled',
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
        return 'controlpanel_index';
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
