<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => 'db9f4cd102a2b8ad5b321e142cbc4ce5a3d02917',
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => 'db9f4cd102a2b8ad5b321e142cbc4ce5a3d02917',
            'dev_requirement' => false,
        ),
        'heroku/heroku-buildpack-php' => array(
            'pretty_version' => 'v121',
            'version' => '121.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../heroku/heroku-buildpack-php',
            'aliases' => array(),
            'reference' => '727aa850a02a7af94c9225237464be8e8c8ff6db',
            'dev_requirement' => true,
        ),
        'monolog/monolog' => array(
            'pretty_version' => '1.22.1',
            'version' => '1.22.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'reference' => '1e044bc4b34e91743943479f1be7a1d5eb93add0',
            'dev_requirement' => false,
        ),
        'pimple/pimple' => array(
            'pretty_version' => 'v3.0.2',
            'version' => '3.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pimple/pimple',
            'aliases' => array(),
            'reference' => 'a30f7d6e57565a2e1a316e1baf2a483f788b258a',
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => '1.0.2',
            'version' => '1.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'reference' => '4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0',
            ),
        ),
        'silex/api' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v2.0.4',
            ),
        ),
        'silex/providers' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v2.0.4',
            ),
        ),
        'silex/silex' => array(
            'pretty_version' => 'v2.0.4',
            'version' => '2.0.4.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../silex/silex',
            'aliases' => array(),
            'reference' => '49ca08d853731d1635374e5019c8696cfd53c161',
            'dev_requirement' => false,
        ),
        'symfony/debug' => array(
            'pretty_version' => 'v3.2.7',
            'version' => '3.2.7.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/debug',
            'aliases' => array(),
            'reference' => '56f613406446a4a0a031475cfd0a01751de22659',
            'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => array(
            'pretty_version' => 'v3.2.7',
            'version' => '3.2.7.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/event-dispatcher',
            'aliases' => array(),
            'reference' => '154bb1ef7b0e42ccc792bd53edbce18ed73440ca',
            'dev_requirement' => false,
        ),
        'symfony/http-foundation' => array(
            'pretty_version' => 'v3.4.47',
            'version' => '3.4.47.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/http-foundation',
            'aliases' => array(),
            'reference' => 'b9885fcce6fe494201da4f70a9309770e9d13dc8',
            'dev_requirement' => false,
        ),
        'symfony/http-kernel' => array(
            'pretty_version' => 'v3.2.7',
            'version' => '3.2.7.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/http-kernel',
            'aliases' => array(),
            'reference' => '8285ab5faf1306b1a5ebcf287fe91c231a6de88e',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.23.1',
            'version' => '1.23.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'reference' => '9174a3d80210dca8daa7f31fec659150bbeabfc6',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-php70' => array(
            'pretty_version' => 'v1.20.0',
            'version' => '1.20.0.0',
            'type' => 'metapackage',
            'install_path' => NULL,
            'aliases' => array(),
            'reference' => '5f03a781d984aae42cebd18e7912fa80f02ee644',
            'dev_requirement' => false,
        ),
        'symfony/routing' => array(
            'pretty_version' => 'v3.2.7',
            'version' => '3.2.7.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/routing',
            'aliases' => array(),
            'reference' => 'd6605f9a5767bc5bc4895e1c762ba93964608aee',
            'dev_requirement' => false,
        ),
        'symfony/twig-bridge' => array(
            'pretty_version' => 'v3.2.7',
            'version' => '3.2.7.0',
            'type' => 'symfony-bridge',
            'install_path' => __DIR__ . '/../symfony/twig-bridge',
            'aliases' => array(),
            'reference' => 'cb632b9a81f0262d6eff9097e46903f272070015',
            'dev_requirement' => false,
        ),
        'twig/twig' => array(
            'pretty_version' => 'v2.3.0',
            'version' => '2.3.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twig/twig',
            'aliases' => array(),
            'reference' => '9718186a5df85a4f7917e78d3ffcabc204c75d25',
            'dev_requirement' => false,
        ),
    ),
);
