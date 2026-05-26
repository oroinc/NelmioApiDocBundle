<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as BaseWebTestCase;
use Symfony\Component\HttpKernel\KernelInterface;

abstract class WebTestCase extends BaseWebTestCase
{
    public static function handleDeprecation($errorNumber, $message, $file, $line)
    {
        return (bool) ($errorNumber & E_USER_DEPRECATED);
    }

    protected static function getKernelClass(): string
    {
        require_once __DIR__.'/Fixtures/app/AppKernel.php';

        return 'Nelmio\ApiDocBundle\Tests\Functional\AppKernel';
    }

    protected static function createKernel(array $options = array()): KernelInterface
    {
        $class = self::getKernelClass();

        return new $class(
            'default',
            isset($options['debug']) ? $options['debug'] : true
        );
    }
}
