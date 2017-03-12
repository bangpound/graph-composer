<?php

namespace Clue\GraphComposer\Plugin;

use Clue\GraphComposer\Command;

class CommandProvider implements \Composer\Plugin\Capability\CommandProvider
{
    /**
     * Retreives an array of commands
     *
     * @return \Composer\Command\BaseCommand[]
     */
    public function getCommands()
    {
        return array(new Command\Show(), new Command\Export());
    }
}
