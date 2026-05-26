<?php

return array (
  'swaggerVersion' => '1.2',
  'apiVersion' => '3.14',
  'basePath' => '/api',
  'resourcePath' => '/tests',
  'apis' => 
  array (
    0 => 
    array (
      'path' => '/tests.{_format}',
      'operations' => 
      array (
        0 => 
        array (
          'method' => 'GET',
          'summary' => 'index action',
          'nickname' => 'get_tests',
          'parameters' => 
          array (
            0 => 
            array (
              'paramType' => 'path',
              'name' => '_format',
              'type' => 'string',
              'required' => true,
            ),
            1 => 
            array (
              'paramType' => 'query',
              'name' => 'a',
              'type' => 'integer',
              'description' => NULL,
            ),
            2 => 
            array (
              'paramType' => 'query',
              'name' => 'b',
              'type' => 'string',
              'description' => NULL,
            ),
          ),
          'responseMessages' => 
          array (
          ),
        ),
        1 => 
        array (
          'method' => 'POST',
          'summary' => 'create test',
          'nickname' => 'post_tests',
          'parameters' => 
          array (
            0 => 
            array (
              'paramType' => 'path',
              'name' => '_format',
              'type' => 'string',
              'required' => true,
            ),
            1 => 
            array (
              'paramType' => 'form',
              'name' => 'a',
              'type' => 'string',
              'description' => 'A nice description',
            ),
            2 => 
            array (
              'paramType' => 'form',
              'name' => 'b',
              'type' => 'string',
            ),
            3 => 
            array (
              'paramType' => 'form',
              'name' => 'c',
              'type' => 'boolean',
              'defaultValue' => false,
            ),
            4 => 
            array (
              'paramType' => 'form',
              'name' => 'd',
              'type' => 'string',
              'defaultValue' => 'DefaultTest',
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
