<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLtutuxd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLtutuxd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLtutuxd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLtutuxd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLtutuxd\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ltutuxd',
    'container.build_id' => '93f222bf',
    'container.build_time' => 1661164427,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLtutuxd');
