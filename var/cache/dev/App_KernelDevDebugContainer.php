<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0x3rAxf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0x3rAxf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0x3rAxf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0x3rAxf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0x3rAxf\App_KernelDevDebugContainer([
    'container.build_hash' => '0x3rAxf',
    'container.build_id' => 'ac169e95',
    'container.build_time' => 1664387045,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0x3rAxf');
