<?php

return [

    'dsn' => 'https://629b29035c6b4904acf6a5eff7d1d0c1@sentry.io/1724380',

    // capture release as git sha
    // 'release' => trim(exec('git --git-dir ' . base_path('.git') . ' log --pretty="%h" -n1 HEAD')),

    'breadcrumbs' => [

        // Capture bindings on SQL queries logged in breadcrumbs
        'sql_bindings' => true,

    ],

];
