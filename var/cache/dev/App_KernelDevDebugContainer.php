<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWJHYV9I\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWJHYV9I/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWJHYV9I.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWJHYV9I\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWJHYV9I\App_KernelDevDebugContainer([
    'container.build_hash' => 'WJHYV9I',
    'container.build_id' => 'e7e04f7f',
    'container.build_time' => 1659623301,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWJHYV9I');
