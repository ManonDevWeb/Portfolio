<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAj9wx0w\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAj9wx0w/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAj9wx0w.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAj9wx0w\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAj9wx0w\App_KernelDevDebugContainer([
    'container.build_hash' => 'Aj9wx0w',
    'container.build_id' => '4708ba27',
    'container.build_time' => 1661160930,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAj9wx0w');
