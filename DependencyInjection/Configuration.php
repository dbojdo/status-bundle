<?php

namespace Webit\Bundle\StatusBundle\DependencyInjection;

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
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('webit_status');
				$rootNode
					->children()
						->scalarNode('status_provider.default')->defaultValue('Webit\Bundle\StatusBundle\Status\StatusProviderStatic')->end();
					->end()
				->end();
					
        return $treeBuilder;
    }
}
?>
