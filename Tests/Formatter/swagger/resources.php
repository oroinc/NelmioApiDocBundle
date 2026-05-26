<?php

return array (
  'swaggerVersion' => '1.2',
  'apiVersion' => '3.14',
  'basePath' => '/api',
  'resourcePath' => '/resources',
  'apis' => 
  array (
    0 => 
    array (
      'path' => '/resources.{_format}',
      'operations' => 
      array (
        0 => 
        array (
          'method' => 'GET',
          'summary' => 'List resources.',
          'nickname' => 'get_resources',
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
              'message' => 'Returned on success.',
              'responseModel' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.Test[tests]',
            ),
            1 => 
            array (
              'code' => 404,
              'message' => 'Returned if resource cannot be found.',
            ),
          ),
          'type' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.Test[tests]',
        ),
        1 => 
        array (
          'method' => 'POST',
          'summary' => 'Create a new resource.',
          'nickname' => 'post_resources',
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
            1 => 
            array (
              'paramType' => 'form',
              'name' => 'a',
              'type' => 'string',
              'description' => 'Something that describes A.',
            ),
            2 => 
            array (
              'paramType' => 'form',
              'name' => 'b',
              'type' => 'number',
              'format' => 'float',
            ),
            3 => 
            array (
              'paramType' => 'form',
              'name' => 'c',
              'type' => 'string',
              'enum' => 
              array (
                0 => 'x',
                1 => 'y',
                2 => 'z',
              ),
            ),
            4 => 
            array (
              'paramType' => 'form',
              'name' => 'd',
              'type' => 'string',
              'format' => 'date-time',
            ),
            5 => 
            array (
              'paramType' => 'form',
              'name' => 'e',
              'type' => 'string',
              'format' => 'date',
            ),
            6 => 
            array (
              'paramType' => 'form',
              'name' => 'g',
              'type' => 'string',
            ),
          ),
          'responseMessages' => 
          array (
            0 => 
            array (
              'code' => 200,
              'message' => 'See standard HTTP status code reason for 200',
              'responseModel' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsNested',
            ),
            1 => 
            array (
              'code' => 400,
              'message' => 'See standard HTTP status code reason for 400',
              'responseModel' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Form.SimpleType.ErrorResponse',
            ),
          ),
          'type' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsNested',
        ),
      ),
    ),
    1 => 
    array (
      'path' => '/resources/{id}.{_format}',
      'operations' => 
      array (
        0 => 
        array (
          'method' => 'DELETE',
          'summary' => 'Delete a resource by ID.',
          'nickname' => 'delete_resources',
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
        1 => 
        array (
          'method' => 'GET',
          'summary' => 'Retrieve a resource by ID.',
          'nickname' => 'get_resources',
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
    'Nelmio.ApiDocBundle.Tests.Fixtures.Model.Test' => 
    array (
      'id' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.Test',
      'description' => NULL,
      'properties' => 
      array (
        'a' => 
        array (
          'type' => 'string',
          'description' => 'string',
        ),
        'b' => 
        array (
          'type' => 'string',
          'description' => 'DateTime',
          'format' => 'date-time',
        ),
      ),
      'required' => 
      array (
        0 => 'a',
      ),
    ),
    'Nelmio.ApiDocBundle.Tests.Fixtures.Model.Test[tests]' => 
    array (
      'id' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.Test[tests]',
      'description' => '',
      'properties' => 
      array (
        'tests' => 
        array (
          'type' => 'array',
          'description' => NULL,
          'items' => 
          array (
            '$ref' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.Test',
          ),
        ),
      ),
      'required' => 
      array (
        0 => 'tests',
      ),
    ),
    'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsTest' => 
    array (
      'id' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Model.JmsTest',
      'description' => 'object (JmsTest)',
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
      'description' => '',
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
    'FieldErrors' => 
    array (
      'id' => 'FieldErrors',
      'description' => 'Errors on the parameter',
      'properties' => 
      array (
        'errors' => 
        array (
          'type' => 'array',
          'description' => 'array of errors',
          'items' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'required' => 
      array (
      ),
    ),
    'Nelmio.ApiDocBundle.Tests.Fixtures.Form.SimpleType.FieldErrors[simple]' => 
    array (
      'id' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Form.SimpleType.FieldErrors[simple]',
      'description' => 'Errors on the parameter',
      'properties' => 
      array (
        'a' => 
        array (
          '$ref' => 'FieldErrors',
        ),
        'b' => 
        array (
          '$ref' => 'FieldErrors',
        ),
        'c' => 
        array (
          '$ref' => 'FieldErrors',
        ),
        'd' => 
        array (
          '$ref' => 'FieldErrors',
        ),
        'e' => 
        array (
          '$ref' => 'FieldErrors',
        ),
        'g' => 
        array (
          '$ref' => 'FieldErrors',
        ),
      ),
      'required' => 
      array (
      ),
    ),
    'Nelmio.ApiDocBundle.Tests.Fixtures.Form.SimpleType.FormErrors' => 
    array (
      'id' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Form.SimpleType.FormErrors',
      'description' => 'Errors',
      'properties' => 
      array (
        'simple' => 
        array (
          '$ref' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Form.SimpleType.FieldErrors[simple]',
        ),
      ),
      'required' => 
      array (
      ),
    ),
    'Nelmio.ApiDocBundle.Tests.Fixtures.Form.SimpleType.ErrorResponse' => 
    array (
      'id' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Form.SimpleType.ErrorResponse',
      'description' => '',
      'properties' => 
      array (
        'status_code' => 
        array (
          'type' => 'integer',
          'description' => 'The status code',
          'format' => 'int32',
        ),
        'message' => 
        array (
          'type' => 'string',
          'description' => 'The error message',
        ),
        'errors' => 
        array (
          '$ref' => 'Nelmio.ApiDocBundle.Tests.Fixtures.Form.SimpleType.FormErrors',
        ),
      ),
      'required' => 
      array (
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
