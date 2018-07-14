<?php

Kirby::plugin(':org_username/:plugin_name', [
    'fieldMethods' => [
        'test' => function () {
            return 'test field method';
        }
    ],
    'pageMethods' => [
        'test' => function () {
            return 'test page method';
        }
    ],
]);
