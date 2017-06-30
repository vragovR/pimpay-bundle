<?php
namespace PimpayBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package PimpayBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('pimpay');
        $rootNode
            ->children()
                ->scalarNode('token')
                    ->isRequired()
                ->end()
                ->scalarNode('path_key')
                    ->isRequired()
                ->end()
                ->scalarNode('passphrase')
                    ->isRequired()
                ->end()
                ->scalarNode('hash')
                    ->isRequired()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
