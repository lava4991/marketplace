<?php

namespace Shared\OrderClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('order_client');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('api_base_url')
                    ->isRequired(true)
                ->end()
            ->end();

        return $treeBuilder;
    }
}
