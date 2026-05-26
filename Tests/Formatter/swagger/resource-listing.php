<?php

return array (
  'swaggerVersion' => '1.2',
  'apis' => 
  array (
    0 => 
    array (
      'path' => '/other-resources',
      'description' => 'Operations on another resource.',
    ),
    1 => 
    array (
      'path' => '/resources',
      'description' => 'Operations on resource.',
    ),
    2 => 
    array (
      'path' => '/tests',
      'description' => NULL,
    ),
    3 => 
    array (
      'path' => '/tests2',
      'description' => NULL,
    ),
    4 => 
    array (
      'path' => '/TestResource',
      'description' => NULL,
    ),
  ),
  'apiVersion' => '3.14',
  'info' => 
  array (
    'title' => 'Nelmio Swagger',
    'description' => 'Testing Swagger integration.',
    'TermsOfServiceUrl' => 'https://github.com',
    'contact' => 'user@domain.tld',
    'license' => 'MIT',
    'licenseUrl' => 'http://opensource.org/licenses/MIT',
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
