<?php
/**
 * service  参数配置
 */
namespace Hyperbolaa\SymfonyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('hyperbolaa_symfony');

        $this->addOptions($rootNode);

        return $treeBuilder;
    }

    /**
     * Add options to the configuration tree
     *
     * @param ArrayNodeDefinition $node
     */
    private function addOptions(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->scalarNode('author')
                    ->defaultValue('chong yu')
                    ->info('the author of the name')
                    ->example('charless tian')
                ->end()
            ->end()
        ;
    }
}
