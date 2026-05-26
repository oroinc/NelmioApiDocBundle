<?php

/*
 * This file is part of the NelmioApiDocBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NelmioApiDocBundle\Tests\Controller;
use Nelmio\ApiDocBundle\Tests\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiDocControllerTest
 *
 * @package NelmioApiDocBundle\Tests\Controller
 * @author Bez Hermoso <bez@activelamp.com>
 */
class ApiDocControllerTest extends WebTestCase
{
    public function testSwaggerDocResourceListRoute()
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/api-docs/');

        $response = $client->getResponse();

        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());
        $this->assertEquals('application/json', $response->headers->get('Content-type'));

    }

    public function dataTestApiDeclarations()
    {
        return array(
            array('resources'),
            array('tests'),
            array('tests2'),
            array('TestResource'),
        );
    }

    /**
     * @dataProvider dataTestApiDeclarations
     */
    public function testApiDeclarationRoutes($resource)
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/api-docs/' . $resource);

        $response = $client->getResponse();

        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());
        $this->assertEquals('application/json', $response->headers->get('Content-type'));
    }

    public function testNonExistingApiDeclaration()
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/api-docs/santa');

        $response = $client->getResponse();
        $this->assertEquals(Response::HTTP_NOT_FOUND, $response->getStatusCode());

    }
}
