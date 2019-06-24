<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\Motherboard
 *
 * @property int                             $id
 * @property string                          $vendor
 * @property string                          $model
 * @property int                             $cpu_id
 * @property string                          $chipset
 * @property string                          $socket_type
 * @property string                          $form_factor
 * @property string|null                     $dvi
 * @property string|null                     $hdmi
 * @property string|null                     $display_port
 * @property string                          $bios
 * @property string                          $graphics
 * @property string                          $audio
 * @property string                          $audio_chipset
 * @property string                          $lan
 * @property int                             $max_lan_speed
 * @property int                             $memory_slots
 * @property int                             $maximum_memory_supported
 * @property mixed                           $channels_supported
 * @property mixed                           $storage
 * @property mixed                           $connectors
 * @property mixed                           $supported_oses
 * @property string|null                     $notes
 * @property int                             $eol_announced
 * @property int                             $ipmi_enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Motherboard newModelQuery()
 * @method static Builder|Motherboard newQuery()
 * @method static Builder|Motherboard query()
 * @method static Builder|Motherboard whereAudio($value)
 * @method static Builder|Motherboard whereAudioChipset($value)
 * @method static Builder|Motherboard whereBios($value)
 * @method static Builder|Motherboard whereChannelsSupported($value)
 * @method static Builder|Motherboard whereChipset($value)
 * @method static Builder|Motherboard whereConnectors($value)
 * @method static Builder|Motherboard whereCpuId($value)
 * @method static Builder|Motherboard whereCreatedAt($value)
 * @method static Builder|Motherboard whereDisplayPort($value)
 * @method static Builder|Motherboard whereDvi($value)
 * @method static Builder|Motherboard whereEolAnnounced($value)
 * @method static Builder|Motherboard whereFormFactor($value)
 * @method static Builder|Motherboard whereGraphics($value)
 * @method static Builder|Motherboard whereHdmi($value)
 * @method static Builder|Motherboard whereId($value)
 * @method static Builder|Motherboard whereIpmiEnabled($value)
 * @method static Builder|Motherboard whereLan($value)
 * @method static Builder|Motherboard whereMaxLanSpeed($value)
 * @method static Builder|Motherboard whereMaximumMemorySupported($value)
 * @method static Builder|Motherboard whereMemorySlots($value)
 * @method static Builder|Motherboard whereModel($value)
 * @method static Builder|Motherboard whereNotes($value)
 * @method static Builder|Motherboard whereSocketType($value)
 * @method static Builder|Motherboard whereStorage($value)
 * @method static Builder|Motherboard whereSupportedOses($value)
 * @method static Builder|Motherboard whereUpdatedAt($value)
 * @method static Builder|Motherboard whereVendor($value)
 * @mixin \Eloquent
 */
class Motherboard extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'vendor',
        'model',
        'cpu_id',
        'chipset',
        'socket_type',
        'form_factor',
        'dvi',
        'hdmi',
        'display_port',
        'bios',
        'graphics',
        'audio',
        'audio_chipset',
        'lan',
        'max_lan_speed',
        'memory_slots',
        'maximum_memory_supported',
        'channels_supported',
        'storage',
        'connectors',
        'supported_oses',
        'notes',
        'eol_announced',
        'ipmi_enabled',
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
        return 'motherboards_index';
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
