<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSwmmINV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSwmmINV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSwmmINV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSwmmINV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSwmmINV\App_KernelDevDebugContainer([
    'container.build_hash' => 'SwmmINV',
    'container.build_id' => '48d48f56',
    'container.build_time' => 1665247414,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSwmmINV');
