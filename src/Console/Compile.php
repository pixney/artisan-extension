<?php

namespace Pixney\ArtisanExtension\Console;

use Illuminate\Console\Command;

/**
 * Class Compile
 *
 *  @author Pixney AB <hello@pixney.com>
 *  @author William Åström <william@pixney.com>
 *
 *  @link https://pixney.com
 */
class Compile extends Command
{
    protected $signature = 'pyro:compile';

    protected $description = 'Set installed to false, runs stream compile and resets installed to true';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->comment('Setting installed to false and running streams:compile');
        $this->call('env:set', [
            'line' => 'INSTALLED=FALSE'
            ]);
        $this->call('streams:compile');
        $this->call('env:set', [
            'line' => 'INSTALLED=TRUE'
            ]);
        $this->comment('Streams:compile completed and installed set to true.');
    }
}
