<?php

$kirbyGit = new Blanko\Kirby\GCAPC\KirbyGit();

Kirby::plugin('blankogmbh/gcapc', [
    'hooks' => $kirbyGit->getHooks(),
    'routes' => $kirbyGit->getRoutes(),
    'options' => [
        'path' => null,
        'branch' => null,
        'pull' => null,
        'push' => null,
        'commit' => null,
        'commitMessage' => ':action:(:item:): :url:',
        'cronHooksEnabled' => null,
        'windowsMode' => null,
        'gitBin' => null,
        'displayErrors' => null,
    ]
]);
