<?php

namespace Pixney\ArtisanExtension;

use Pixney\ArtisanExtension\Console\Clear;
use Pixney\ArtisanExtension\Console\Compile;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class ArtisanExtensionServiceProvider
 *
 *  @author Pixney AB <hello@pixney.com>
 *  @author William Åström <william@pixney.com>
 *
 *  @link https://pixney.com
 */
class ArtisanExtensionServiceProvider extends AddonServiceProvider
{
    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [
        Compile::class,
        Clear::class,
    ];
}
