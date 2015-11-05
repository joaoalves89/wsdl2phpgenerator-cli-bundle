<?php

namespace VentureOakLabs\Wsdl2PhpGeneratorCliBundle\Command;

use VentureOakLabs\Wsdl2PhpGenerator\Console\Command\Wsdl2PhpGeneratorCommand as BaseWsdl2PhpGeneratorCommand;

/**
 * Exposes the Wsdl2PhpGeneratorCommand into the Symfony
 *
 * @author João Alves <jalves@ventureoak.com>
 *
 * @copyright 2015 VentureOak
 */
class Wsdl2PhpGeneratorCommand extends BaseWsdl2PhpGeneratorCommand
{
    protected function configure()
    {
        parent::configure();

        $this->setName('wsdl2php-generator:generate');

    }
}
