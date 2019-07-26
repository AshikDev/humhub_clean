<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=humhub_clean',
      'username' => 'root',
      'password' => 'root',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_MailTransport',
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\FileCache',
      'keyPrefix' => 'humhub',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => 'humhub_clean',
      ),
    ),
    'config_created_at' => 1557184503,
    'horImageScrollOnMobile' => '1',
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'SFB',
  'language' => 'en-US',
); ?>