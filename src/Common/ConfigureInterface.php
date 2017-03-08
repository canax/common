<?php

namespace Anax\Common;

/**
 * Interface for classes needing injection of the $app object
 * containingframework resources.
 *
 */
interface ConfigureInterface
{
    /**
     * Read configuration from file or array, if a file, first check in
     * ANAX_APP_PATH/config and then in ANAX_INSTALL_PATH/config.
     *
     * @param array/string $what is an array with key/value config options
     *                           or a file to be included which returns such
     *                           an array.
     *
     * @throws Exception when argument if not a filer nor an array.
     *
     * @return $this for chaining.
     */
    public function configure($what);
}