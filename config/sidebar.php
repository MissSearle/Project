<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [
        [
            'text' => 'APP INTERFACE',
            'is_header' => true
        ],
        [
            'url' => '/',
            'icon' => 'ph:rocket-duotone',
            'text' => 'DASHBOARD'
        ],
        [
            'url' => '/analytics',
            'icon' => 'ph:chart-bar-duotone',
            'text' => 'ANALYTICS'
        ],
        [
            'icon' => 'ph:envelope-duotone',
            'text' => 'EMAIL',
            'children' => [[
                'url' => '/email/inbox',
                'action' => 'Inbox',
                'text' => 'INBOX'
            ], [
                'url' => '/email/compose',
                'action' => 'Compose',
                'text' => 'COMPOSE'
            ], [
                'url' => '/email/detail',
                'action' => 'Detail',
                'text' => 'DETAIL'
            ]]
        ],
        [
            'is_divider' => true
        ],
        [
            'text' => 'UXUI COMPONENTS',
            'is_header' => true
        ],
        [
            'url' => '/widgets',
            'icon' => 'ph:stack-duotone',
            'text' => 'WIDGETS'
        ],
        [
            'icon' => 'ph:handbag-simple-duotone',
            'text' => 'POS SYSTEM',
            'highlight' => true,
            'children' => [[
                'url' => '/pos/customer-order',
                'text' => 'CUSTOMER ORDER'
            ], [
                'url' => '/pos/kitchen-order',
                'text' => 'KITCHEN ORDER'
            ], [
                'url' => '/pos/counter-checkout',
                'text' => 'COUNTER CHECKOUT'
            ], [
                'url' => '/pos/table-booking',
                'text' => 'TABLE BOOKING'
            ], [
                'url' => '/pos/menu-stock',
                'text' => 'MENU STOCK'
            ]]
        ],
        [
            'icon' => 'ph:game-controller-duotone',
            'text' => 'UI KITS',
            'children' => [[
                'url' => '/ui/bootstrap',
                'text' => 'BOOTSTRAP'
            ], [
                'url' => '/ui/buttons',
                'text' => 'BUTTONS'
            ], [
                'url' => '/ui/card',
                'text' => 'CARD'
            ], [
                'url' => '/ui/icons',
                'text' => 'ICONS'
            ], [
                'url' => '/ui/modal-notifications',
                'text' => 'MODAL & NOTIFICATIONS'
            ], [
                'url' => '/ui/typography',
                'text' => 'TYPOGRAPHY'
            ], [
                'url' => '/ui/tabs-accordions',
                'text' => 'TABS & ACCORDIONS'
            ]]
        ],
        [
            'icon' => 'ph:pencil-simple-duotone',
            'text' => 'FORMS',
            'children' => [[
                'url' => '/form/elements',
                'text' => 'FORM ELEMENTS'
            ], [
                'url' => '/form/plugins',
                'text' => 'FORM PLUGINS'
            ], [
                'url' => '/form/wizards',
                'text' => 'WIZARDS'
            ]]
        ],
        [
            'icon' => 'ph:grid-nine-duotone',
            'text' => 'TABLES',
            'children' => [
                [
                    'url' => '/table/elements',
                    'text' => 'TABLE ELEMENTS'
                ],
                [
                    'url' => '/table/plugins',
                    'text' => 'TABLE PLUGINS'
                ]
            ]
        ],
        [
            'icon' => 'ph:chart-donut-duotone',
            'text' => 'CHARTS',
            'children' => [[
                'url' => '/chart/chart-js',
                'text' => 'CHART.JS'
            ], [
                'url' => '/chart/chart-apex',
                'text' => 'APEXCHARTS.JS'
            ]]
        ],
        [
            'url' => '/map',
            'icon' => 'ph:map-pin-area-duotone',
            'text' => 'MAP'
        ],
        [
            'icon' => 'ph:terminal-window-duotone',
            'text' => 'LAYOUT',
            'children' => [[
                'url' => '/layout/starter-page',
                'text' => 'STARTER PAGE'
            ], [
                'url' => '/layout/fixed-footer',
                'text' => 'FIXED FOOTER'
            ], [
                'url' => '/layout/full-height',
                'text' => 'FULL HEIGHT'
            ], [
                'url' => '/layout/full-width',
                'text' => 'FULL WIDTH'
            ], [
                'url' => '/layout/boxed-layout',
                'text' => 'BOXED LAYOUT'
            ], [
                'url' => '/layout/collapsed-sidebar',
                'text' => 'COLLAPSED SIDEBAR'
            ], [
                'url' => '/layout/top-nav',
                'text' => 'TOP NAV'
            ], [
                'url' => '/layout/mixed-nav',
                'text' => 'MIXED NAV'
            ], [
                'url' => '/layout/mixed-nav-boxed-layout',
                'text' => 'MIXED NAV BOXED LAYOUT'
            ]]
        ],
        [
            'icon' => 'ph:open-ai-logo-duotone',
            'text' => 'PAGES',
            'children' => [[
                'url' => '/page/scrum-board',
                'text' => 'SCRUM BOARD'
            ], [
                'url' => '/page/products',
                'text' => 'PRODUCTS'
            ], [
                'url' => '/page/product/details',
                'text' => 'PRODUCT DETAILS'
            ], [
                'url' => '/page/orders',
                'text' => 'ORDERS'
            ], [
                'url' => '/page/order/details',
                'text' => 'ORDER DETAILS'
            ], [
                'url' => '/page/gallery',
                'text' => 'GALLERY'
            ], [
                'url' => '/page/search-results',
                'text' => 'SEARCH RESULTS'
            ], [
                'url' => '/page/coming-soon',
                'text' => 'COMING SOON PAGE'
            ], [
                'url' => '/page/error',
                'text' => 'ERROR PAGE'
            ], [
                'url' => '/page/login',
                'text' => 'LOGIN'
            ], [
                'url' => '/page/register',
                'text' => 'REGISTER'
            ], [
                'url' => '/page/data-management',
                'text' => 'DATA MANAGEMENT'
            ], [
                'url' => '/page/pricing',
                'text' => 'PRICING PAGE'
            ]]
        ],
        [
            'is_divider' => true
        ],
        [
            'text' => 'USER PORTAL',
            'is_header' => true
        ],
        [
            'url' => '/file-manager',
            'icon' => 'ph:folder-duotone',
            'text' => 'FILE MANAGER'
        ],
        [
            'url' => '/messenger',
            'icon' => 'ph:messenger-logo-duotone',
            'text' => 'MESSENGER'
        ],
        [
            'url' => '/profile',
            'icon' => 'ph:user-focus-duotone',
            'text' => 'PROFILE'
        ],
        [
            'url' => '/calendar',
            'icon' => 'ph:calendar-duotone',
            'text' => 'CALENDAR'
        ],
        [
            'url' => '/settings',
            'icon' => 'ph:gear-duotone',
            'text' => 'SETTINGS'
        ],
        [
            'url' => '/helper',
            'icon' => 'ph:first-aid-kit-duotone',
            'text' => 'HELPER'
        ]
    ],
    'admin_menu' => [
        // Admin menu
        [
            'text' => 'APP INTERFACE',
            'is_header' => true
        ],
        [
            'url' => '/',
            'icon' => 'ph:rocket-duotone',
            'text' => 'DASHBOARD'
        ],
        [
            'url' => '/analytics',
            'icon' => 'ph:chart-bar-duotone',
            'text' => 'ANALYTICS'
        ],
        [
            'icon' => 'ph:envelope-duotone',
            'text' => 'EMAIL',
            'children' => [[
                'url' => '/email/inbox',
                'action' => 'Inbox',
                'text' => 'INBOX'
            ], [
                'url' => '/email/compose',
                'action' => 'Compose',
                'text' => 'COMPOSE'
            ], [
                'url' => '/email/detail',
                'action' => 'Detail',
                'text' => 'DETAIL'
            ]]
        ],
    ],
];
