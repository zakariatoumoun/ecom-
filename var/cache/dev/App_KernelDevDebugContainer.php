<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDtX7typ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDtX7typ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDtX7typ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDtX7typ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDtX7typ\App_KernelDevDebugContainer([
    'container.build_hash' => 'DtX7typ',
    'container.build_id' => 'd5f22335',
    'container.build_time' => 1664398825,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDtX7typ');
