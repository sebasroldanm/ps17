<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMx00lfb\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMx00lfb/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerMx00lfb.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerMx00lfb\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerMx00lfb\appProdProjectContainer([
    'container.build_hash' => 'Mx00lfb',
    'container.build_id' => '832c2309',
    'container.build_time' => 1606051740,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMx00lfb');
