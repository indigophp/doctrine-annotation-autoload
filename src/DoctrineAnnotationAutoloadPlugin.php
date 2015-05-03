<?php

/*
 * This file is part of the Indigo Doctrine Annotation Autoload plugin.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class DoctrineAnnotationAutoloadPlugin implements PluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $autoloadGenerator = new Autoload\DoctrineAutoloadGenerator($composer->getEventDispatcher(), $io);

        $composer->setAutoloadGenerator($autoloadGenerator);
    }
}
