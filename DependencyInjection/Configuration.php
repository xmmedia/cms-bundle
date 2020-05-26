<?php

declare(strict_types=1);

namespace Xm\CmsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('cms');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
