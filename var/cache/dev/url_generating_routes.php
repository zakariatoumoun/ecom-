<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'test' => [['age'], ['age' => '0', '_controller' => 'App\\Controller\\TestController::test'], ['age' => '\\d+'], [['variable', '/', '\\d+', 'age', true], ['text', '/test']], [['text', 'localhost']], ['https', 'https']],
    'index' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/']], [], []],
];
