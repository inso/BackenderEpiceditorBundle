<?php
/*
 * This file is part of the Backender\EpiceditorBundle Symfony bundle.
 *
 * (c) Marc Juchli <mail@backender.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace Backender\EpiceditorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
	
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('backender_epiceditor');

		$rootNode
			->children()
				->scalarNode('class')
					->defaultValue('Backender\EpiceditorBundle\Form\Type\EpiceditorType')
				->end()
			->end()
		;

        return $treeBuilder;
    }
    
}
