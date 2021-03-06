<?php

namespace Sandbox\MainBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sandbox_main');

        $rootNode
            ->children()
                ->scalarNode('use_sonata_admin')->defaultValue('auto')->end()
                ->scalarNode('content_basepath')->defaultNull()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
