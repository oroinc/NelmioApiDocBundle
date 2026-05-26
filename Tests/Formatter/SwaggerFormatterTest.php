<?php

/*
 * This file is part of the NelmioApiDocBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Tests\Formatter;

use Nelmio\ApiDocBundle\Extractor\ApiDocExtractor;
use Nelmio\ApiDocBundle\Formatter\SwaggerFormatter;
use Nelmio\ApiDocBundle\Tests\WebTestCase;

/**
 * Class SwaggerFormatterTest
 *
 * @package Nelmio\ApiDocBundle\Tests\Formatter
 * @author  Bez Hermoso <bez@activelamp.com>
 */
class SwaggerFormatterTest extends WebTestCase
{
    /**
     * @var ApiDocExtractor
     */
    protected $extractor;

    /**
     * @var SwaggerFormatter
     */
    protected $formatter;

    protected function setUp(): void
    {
        parent::setUp();

        $container       = $this->getContainer();
        $this->extractor = $container->get('nelmio_api_doc.extractor.api_doc_extractor');
        $this->formatter = $container->get('nelmio_api_doc.formatter.swagger_formatter');
    }

    public function testResourceListing()
    {
        set_error_handler(array($this, 'handleDeprecation'));
        $data = $this->extractor->all();
        restore_error_handler();

        $actual = $this->formatter->format($data, null);
        $expected = require __DIR__ . '/swagger/resource-listing.php';

        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider dataTestApiDeclaration
     */
    public function testApiDeclaration($resource, $expected)
    {
        set_error_handler(array($this, 'handleDeprecation'));
        $data = $this->extractor->all();
        restore_error_handler();

        $actual = $this->formatter->format($data, $resource);

        $this->assertEquals($expected, $actual);
    }

    public function dataTestApiDeclaration()
    {
        return array(
            array('/resources', require __DIR__ . '/swagger/resources.php'),
            array('/other-resources', require __DIR__ . '/swagger/other-resources.php'),
            array('/tests', require __DIR__ . '/swagger/tests.php'),
        );
    }
}
