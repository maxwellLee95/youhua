<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXaNQsww\srcProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXaNQsww/srcProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXaNQsww.legacy');

    return;
}

if (!\class_exists(srcProdProjectContainer::class, false)) {
    \class_alias(\ContainerXaNQsww\srcProdProjectContainer::class, srcProdProjectContainer::class, false);
}

return new \ContainerXaNQsww\srcProdProjectContainer(array(
    'container.build_hash' => 'XaNQsww',
    'container.build_id' => 'b6dd9757',
    'container.build_time' => 1566804891,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXaNQsww');