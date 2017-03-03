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
     *
     * @return void
     *
     * @expectedException Anax\Common\ConfigurationException
     */
    public function testMissingConfigFile()
    {
        $config = new DummyConfig();
        $config->configure("MISSING-FILE");
    }
}
