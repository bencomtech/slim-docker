<?php

return [
  'settings' => [
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,

    'logger' => [
      'path' => __DIR__ . '/../logs/' . date('Y-m-d') . '.log',
      'level' => \Monolog\Logger::DEBUG,
    ],

    'db' => [
      'driver' => 'mysql',
      'host' => 'mariadb',
      'database' => 'slim',
      'username' => 'slim_user',
      'password' => 'slim_password',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
    ],
  ],
];
