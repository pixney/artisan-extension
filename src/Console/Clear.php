<?php

namespace Pixney\ArtisanExtension\Console;

use Illuminate\Console\Command;

/**
 * Class Clear
 *
 *  @author Pixney AB <hello@pixney.com>
 *  @author William Åström <william@pixney.com>
 *
 *  @link https://pixney.com
 */
class Clear extends Command
{
    protected $signature = 'pyro:clear';

    protected $description = 'Runs cache, twig, view and http cache clear.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->call('view:clear');
        $this->call('twig:clear');
        $this->call('cache:clear');
        $this->call('httpcache:clear');
        $this->comment('Clear completed');
    }
}
