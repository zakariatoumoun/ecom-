<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKaFTBCj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKaFTBCj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKaFTBCj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKaFTBCj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKaFTBCj\App_KernelDevDebugContainer([
    'container.build_hash' => 'KaFTBCj',
    'container.build_id' => '7996332a',
    'container.build_time' => 1663275321,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKaFTBCj');