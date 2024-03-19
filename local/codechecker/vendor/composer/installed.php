<?php return array(
    'root' => array(
        'name' => 'moodlehq/local_codechecker',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '8be89339db4982e9f884f12087dd9e6837a05e6a',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'dealerdirect/phpcodesniffer-composer-installer' => array(
            'pretty_version' => 'v1.0.0',
            'version' => '1.0.0.0',
            'reference' => '4be43904336affa5c2f70744a348312336afd0da',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../dealerdirect/phpcodesniffer-composer-installer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'moodlehq/local_codechecker' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '8be89339db4982e9f884f12087dd9e6837a05e6a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'moodlehq/moodle-cs' => array(
            'pretty_version' => 'v3.3.14',
            'version' => '3.3.14.0',
            'reference' => '7e12e69578d5bcd3440f83b5936187227231a9ab',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../moodlehq/moodle-cs',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'moodlehq/moodle-local_codechecker' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '3.1.0',
            ),
        ),
        'phpcompatibility/php-compatibility' => array(
            'pretty_version' => 'dev-develop',
            'version' => 'dev-develop',
            'reference' => '306cd263',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcompatibility/php-compatibility',
            'aliases' => array(
                0 => '10.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'phpcsstandards/phpcsextra' => array(
            'pretty_version' => '1.2.1',
            'version' => '1.2.1.0',
            'reference' => '11d387c6642b6e4acaf0bd9bf5203b8cca1ec489',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcsstandards/phpcsextra',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpcsstandards/phpcsutils' => array(
            'pretty_version' => '1.0.9',
            'version' => '1.0.9.0',
            'reference' => '908247bc65010c7b7541a9551e002db12e9dae70',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcsstandards/phpcsutils',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'squizlabs/php_codesniffer' => array(
            'pretty_version' => '3.8.1',
            'version' => '3.8.1.0',
            'reference' => '14f5fff1e64118595db5408e946f3a22c75807f7',
            'type' => 'library',
            'install_path' => __DIR__ . '/../squizlabs/php_codesniffer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wimg/php-compatibility' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);