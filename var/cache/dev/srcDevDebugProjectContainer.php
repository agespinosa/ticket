<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4GKl5rx\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4GKl5rx/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container4GKl5rx.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container4GKl5rx\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container4GKl5rx\srcDevDebugProjectContainer([
    'container.build_hash' => '4GKl5rx',
    'container.build_id' => '8419111a',
    'container.build_time' => 1593521423,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4GKl5rx');
