<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/asikart/web/asikart.co/public_html/docs/user/plugins/language-selector/languages.yaml',
    'modified' => 1508901031,
    'data' => [
        'en' => [
            'PLUGINS' => [
                'LANGUAGE_SELECTOR' => [
                    'PLUGIN_STATUS' => 'Plugin status',
                    'BUILT_IN_CSS' => 'Use built in CSS',
                    'UNTRANSLATED_PAGES' => [
                        'LABEL' => 'Untranslated pages behavior',
                        'HELP' => 'Determine what to do with a language link when the current page doesn\'t exist in that language or it exists but it\'s not published.',
                        'OPT_NONE' => 'Show language (default)',
                        'OPT_REDIR' => 'Show language, link to home route',
                        'OPT_HIDE' => 'Hide language'
                    ],
                    'BUTTON_DISPLAY' => [
                        'LABEL' => 'Button Display',
                        'HELP' => 'Define how button of selected language will be displayed'
                    ],
                    'SELECT_DISPLAY' => [
                        'LABEL' => 'Selector Display',
                        'HELP' => 'Define how language selector will be displayed',
                        'OPT_DEFAULT' => 'Flag + Language name',
                        'OPT_FLAG' => 'Only the flag',
                        'OPT_NAME' => 'Only the language name'
                    ]
                ]
            ]
        ],
        'fr' => [
            'PLUGINS' => [
                'LANGUAGE_SELECTOR' => [
                    'PLUGIN_STATUS' => 'Statut du plugin',
                    'BUILT_IN_CSS' => 'Utiliser CSS du plugin',
                    'UNTRANSLATED_PAGES' => [
                        'LABEL' => 'Comportement des pages non-traduites',
                        'HELP' => 'Définit le comportement des liens lorsque la page n\'existe pas dans la langue courante, ou bien existe mais non publié',
                        'OPT_NONE' => 'Affiche le langage (par défaut)',
                        'OPT_REDIR' => 'Affiche le langage, lié à l\'URL de base',
                        'OPT_HIDE' => 'Cache le langage'
                    ],
                    'BUTTON_DISPLAY' => [
                        'LABEL' => 'Affichage du boutton',
                        'HELP' => 'Définit l\'affichage du bouton de language sélectioné'
                    ],
                    'SELECT_DISPLAY' => [
                        'LABEL' => 'Affichage du sélecteur',
                        'HELP' => 'Définit l\'affichage du sélecteur de language',
                        'OPT_DEFAULT' => 'Drapeau + Nom de la langue',
                        'OPT_FLAG' => 'Seulement le drapeau',
                        'OPT_NAME' => 'Seulement le nom de la langue'
                    ]
                ]
            ]
        ]
    ]
];
