<?php
/**
 * This file is part of the teleport package.
 *
 * Copyright (c) MODX, LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Teleport\Test\Request;


use Teleport\Request\Request;
use Teleport\Request\RequestException;

/**
 * Provides a mock test implementation of Request
 *
 * @package Teleport\Test\Request
 */
class MockRequest extends Request
{
    /**
     * Parse the request arguments into a normalized format.
     *
     * @param array $args An array of arguments to parse.
     *
     * @throws RequestException If no valid action argument is specified.
     * @return array The normalized array of parsed arguments.
     */
    public function parseArguments(array $args)
    {
        $this->action = null;
        $this->arguments = array();
        if (!isset($args['action'])) {
            throw new RequestException($this, "No action argument provided");
        }
        $this->action = $args['action'];
        unset($args['action']);
        return $args;
    }
}
