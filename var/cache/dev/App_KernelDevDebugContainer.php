<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZsSxVCf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZsSxVCf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZsSxVCf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZsSxVCf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZsSxVCf\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZsSxVCf',
    'container.build_id' => '84294b62',
    'container.build_time' => 1687952318,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZsSxVCf');
