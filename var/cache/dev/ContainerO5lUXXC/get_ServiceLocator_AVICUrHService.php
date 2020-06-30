<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.aVICUrH' shared service.

return $this->privates['.service_locator.aVICUrH'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['paginator' => function () {
    return ($this->services['knp_paginator'] ?? $this->load('getKnpPaginatorService.php'));
}, 'repository' => function (): \App\Repository\CommentRepository {
    return ($this->privates['App\Repository\CommentRepository'] ?? $this->load('getCommentRepositoryService.php'));
}]);
