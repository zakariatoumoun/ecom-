<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPxIZW6H\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPxIZW6H/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPxIZW6H.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPxIZW6H\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPxIZW6H\App_KernelDevDebugContainer([
    'container.build_hash' => 'PxIZW6H',
    'container.build_id' => '7e24e289',
    'container.build_time' => 1664474346,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPxIZW6H');
