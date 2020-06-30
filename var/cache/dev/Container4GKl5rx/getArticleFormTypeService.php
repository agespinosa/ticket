<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\ArticleFormType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Form/ArticleFormType.php';

return $this->privates['App\Form\ArticleFormType'] = new \App\Form\ArticleFormType(($this->privates['App\Repository\UserRepository'] ?? $this->load('getUserRepositoryService.php')));
