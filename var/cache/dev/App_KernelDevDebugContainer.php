<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAY6BVlk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAY6BVlk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAY6BVlk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAY6BVlk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAY6BVlk\App_KernelDevDebugContainer([
    'container.build_hash' => 'AY6BVlk',
    'container.build_id' => '0829e7c1',
    'container.build_time' => 1664383291,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAY6BVlk');
