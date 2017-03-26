<?php

namespace Anax\Common;

/**
 * Testing.
 *
 */
class ConfigureTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test
     */
    public function testConfigReturnesSelf()
    {
        //$config = new MockConfig();
        //$self = $config->configure([]);
        //$this->assertEquals($config, $self);
    }


    /**
     * Test
     *
     * @expectedException Anax\Common\ConfigurationException
     */
    public function testMissingConfigFile()
    {
        $config = new MockConfig();
        $config->configure("MISSING-FILE");
    }
}
