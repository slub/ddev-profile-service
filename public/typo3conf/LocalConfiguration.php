<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$M0tiMml3aHhJaG0xaHJTNg$Mn+QMLwwQ2mVr/SaBl/hKTd7IlNlCOsGeZYj9zBbxuk',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'slub_profile_booked' => [
            'authenticationPassword' => 'eX5dtiWKNbJax9pV',
            'authenticationUsername' => 'api4slub',
            'requestUri' => 'https://api.raumbuchung.slub-dresden.de/Web/Services/',
        ],
        'slub_profile_bookmarks' => [
            'bookmarkList' => [
                'apiKey' => 'j7#5d-53reH-nk5%C-NKm83-K5f&ED',
                'requestArgumentIdentifier' => 'tx_slubfindbookmarks_bookmarklist',
                'requestUri' => 'https://katalog.ddev.site/merkliste/api/?type=1469315139&tx_slubfindbookmarks_bookmarklist[controller]=BookmarkList&tx_slubfindbookmarks_bookmarklist[action]=getBookmarks',
            ],
        ],
        'slub_profile_events' => [
            'authenticationPassword' => 'password',
            'authenticationUsername' => 'username',
            'eventList' => [
                'requestArgumentIdentifier' => 'tx_slubevents_apieventlist',
                'requestUri' => 'https://ddev-slub-katalog.ddev.site?type=1452982642',
            ],
            'eventListUser' => [
                'requestArgumentIdentifier' => 'tx_slubevents_apieventlistuser',
                'requestUri' => 'https://ddev-slub-katalog.ddev.site?type=1452982643',
            ],
        ],
    ],
    'FE' => [
        'debug' => false,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pagesection' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '08da8dff4abe49448f79a312ec55987b561f0480eb5d1819138d77130a986ab984c37b24c19e60071cc1349ce2da9a1c',
        'exceptionalErrors' => 12290,
        'features' => [
            'unifiedPageTranslationHandling' => true,
            'yamlImportsFollowDeclarationOrder' => true,
        ],
        'sitename' => 'SLUB Profile Service',
        'systemMaintainers' => [
            1,
        ],
    ],
];
