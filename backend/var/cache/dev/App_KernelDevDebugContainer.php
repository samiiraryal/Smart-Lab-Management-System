<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBkA9ba0\App_KernelDevDebugContainer::class, false)) {
    // no-op
<<<<<<< HEAD
} elseif (!include __DIR__.'/ContainerP1c6CIX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerP1c6CIX.legacy');
=======
if (\class_exists(\ContainerDTRWV7p\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDTRWV7p/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDTRWV7p.legacy');
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
} elseif (!include __DIR__.'/ContainerBkA9ba0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBkA9ba0.legacy');
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBkA9ba0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBkA9ba0\App_KernelDevDebugContainer([
    'container.build_hash' => 'BkA9ba0',
    'container.build_id' => '35371b1a',
    'container.build_time' => 1720371624,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
<<<<<<< HEAD
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP1c6CIX');
=======
    \class_alias(\ContainerDTRWV7p\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDTRWV7p\App_KernelDevDebugContainer([
    'container.build_hash' => 'DTRWV7p',
    'container.build_id' => '29259b3f',
    'container.build_time' => 1720109746,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDTRWV7p');
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBkA9ba0');
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da
