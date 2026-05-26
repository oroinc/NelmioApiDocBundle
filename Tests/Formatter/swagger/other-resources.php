<?php

return array (
  'swaggerVersion' => '1.2',
  'apiVersion' => '3.14',
  'basePath' => '/api',
  'resourcePath' => '/other-resources',
  'apis' => 
  array (
    0 => 
    array (
      'path' => '/other-resources.{_format}',
      'operations' => 
      array (
        0 => 
        array (
          'method' => 'GET',
          'summary' => 'List another resource.',
          'nickname' => 'get_other-resources',
          'parameters' => 
          array (
            0 => 
            array (
              'paramType' => 'path',
              'name' => '_format',
              'type' => 'string',
              'required' => true,
              'enum' => 
              array (
                0 => 'json',
                1 => 'xml',
                2 => 'html',
              ),
            ),
          ),
          'responseMessages' => 
          array (
            0 => 
            array (
              'code' => 200,
              'message' => 'See standard HTTP status code reason for 200',
              'responseModel' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsTest[]',
            ),
          ),
          'type' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsTest[]',
        ),
      ),
    ),
    1 => 
    array (
      'path' => '/other-resources/{id}.{_format}',
      'operations' => 
      array (
        0 => 
        array (
          'method' => 'PATCH',
          'summary' => '',
          'nickname' => 'patch_other-resources',
          'parameters' => 
          array (
            0 => 
            array (
              'paramType' => 'path',
              'name' => 'id',
              'type' => 'string',
              'required' => true,
            ),
            1 => 
            array (
              'paramType' => 'path',
              'name' => '_format',
              'type' => 'string',
              'required' => true,
              'enum' => 
              array (
                0 => 'json',
                1 => 'xml',
                2 => 'html',
              ),
            ),
            2 => 
            array (
              'paramType' => 'form',
              'name' => 'required_field',
              'type' => 'string',
            ),
          ),
          'responseMessages' => 
          array (
          ),
        ),
        1 => 
        array (
          'method' => 'POST',
          'summary' => '',
          'nickname' => 'post_other-resources',
          'parameters' => 
          array (
            0 => 
            array (
              'paramType' => 'path',
              'name' => 'id',
              'type' => 'string',
              'required' => true,
            ),
            1 => 
            array (
              'paramType' => 'path',
              'name' => '_format',
              'type' => 'string',
              'required' => true,
              'enum' => 
              array (
                0 => 'json',
                1 => 'xml',
                2 => 'html',
              ),
            ),
            2 => 
            array (
              'paramType' => 'form',
              'name' => 'required_field',
              'type' => 'string',
            ),
          ),
          'responseMessages' => 
          array (
          ),
        ),
        2 => 
        array (
          'method' => 'PUT',
          'summary' => 'Update a resource bu ID.',
          'nickname' => 'put_other-resources',
          'parameters' => 
          array (
            0 => 
            array (
              'paramType' => 'path',
              'name' => 'id',
              'type' => 'string',
              'required' => true,
            ),
            1 => 
            array (
              'paramType' => 'path',
              'name' => '_format',
              'type' => 'string',
              'required' => true,
              'enum' => 
              array (
                0 => 'json',
                1 => 'xml',
                2 => 'html',
              ),
            ),
          ),
          'responseMessages' => 
          array (
          ),
        ),
        3 => 
        array (
          'method' => 'PATCH',
          'summary' => 'Update a resource bu ID.',
          'nickname' => 'patch_other-resources',
          'parameters' => 
          array (
            0 => 
            array (
              'paramType' => 'path',
              'name' => 'id',
              'type' => 'string',
              'required' => true,
            ),
            1 => 
            array (
              'paramType' => 'path',
              'name' => '_format',
              'type' => 'string',
              'required' => true,
              'enum' => 
              array (
                0 => 'json',
                1 => 'xml',
                2 => 'html',
              ),
            ),
          ),
          'responseMessages' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'models' => 
  array (
    'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsTest' => 
    array (
      'id' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsTest',
      'description' => NULL,
      'properties' => 
      array (
        'foo' => 
        array (
          'type' => 'string',
          'description' => 'string',
        ),
        'bar' => 
        array (
          'type' => 'string',
          'description' => 'DateTime',
          'format' => 'date-time',
        ),
        'number' => 
        array (
          'type' => 'number',
          'description' => 'double',
          'format' => 'float',
        ),
        'arr' => 
        array (
          'type' => 'array',
          'description' => 'array',
          'items' => 
          array (
            'type' => 'string',
          ),
        ),
        'nested' => 
        array (
          '$ref' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsNested',
        ),
        'nested_array' => 
        array (
          'type' => 'array',
          'description' => 'array of objects (JmsNested)',
          'items' => 
          array (
            '$ref' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsNested',
          ),
        ),
      ),
      'required' => 
      array (
      ),
    ),
    'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsNested' => 
    array (
      'id' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsNested',
      'description' => 'object (JmsNested)',
      'properties' => 
      array (
        'foo' => 
        array (
          'type' => 'string',
          'description' => 'DateTime',
          'format' => 'date-time',
        ),
        'bar' => 
        array (
          'type' => 'string',
          'description' => 'string',
        ),
        'baz' => 
        array (
          'type' => 'array',
          'description' => 'Epic description.

With multiple lines.',
          'items' => 
          array (
            'type' => 'integer',
          ),
        ),
        'circular' => 
        array (
          '$ref' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsNested',
        ),
        'parent' => 
        array (
          '$ref' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsTest',
        ),
        'since' => 
        array (
          'type' => 'string',
          'description' => 'string',
        ),
        'until' => 
        array (
          'type' => 'string',
          'description' => 'string',
        ),
        'since_and_until' => 
        array (
          'type' => 'string',
          'description' => 'string',
        ),
      ),
      'required' => 
      array (
      ),
    ),
    'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsTest[]' => 
    array (
      'id' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsTest[]',
      'description' => '',
      'properties' => 
      array (
        '' => 
        array (
          'type' => 'array',
          'description' => NULL,
          'items' => 
          array (
            '$ref' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsTest',
          ),
        ),
      ),
      'required' => 
      array (
        0 => '',
      ),
    ),
  ),
  'produces' => 
  array (
  ),
  'consumes' => 
  array (
  ),
  'authorizations' => 
  array (
    'apiKey' => 
    array (
      'type' => 'apiKey',
      'passAs' => 'header',
      'keyname' => 'access_token',
    ),
  ),
);
