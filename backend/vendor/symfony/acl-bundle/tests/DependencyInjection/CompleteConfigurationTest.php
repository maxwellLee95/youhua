<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\AclBundle\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\AclBundle\AclBundle;
use Symfony\Bundle\AclBundle\DependencyInjection\AclExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

abstract class CompleteConfigurationTest extends TestCase
{
    private static $containerCache = array();

    abstract protected function loadFromFile(ContainerBuilder $container, $file);

    public function testAcl()
    {
        $container = $this->getContainer('container1');

        $this->assertTrue($container->hasDefinition('security.acl.dbal.provider'));
        $this->assertEquals('security.acl.dbal.provider', (string) $container->getAlias('security.acl.provider'));
    }

    public function testCustomAclProvider()
    {
        $container = $this->getContainer('custom_acl_provider');

        $this->assertFalse($container->hasDefinition('security.acl.dbal.provider'));
        $this->assertEquals('foo', (string) $container->getAlias('security.acl.provider'));
    }

    protected function getContainer($file)
    {
        if (isset(self::$containerCache[$file])) {
            return self::$containerCache[$file];
        }
        $container = new ContainerBuilder();
        $acl = new AclExtension();
        $container->registerExtension($acl);

        $bundle = new AclBundle();
        $bundle->build($container);
        $this->loadFromFile($container, $file);

        $container->getCompilerPassConfig()->setOptimizationPasses(array());
        $container->getCompilerPassConfig()->setRemovingPasses(array());
        $container->compile();

        return self::$containerCache[$file] = $container;
    }
}
