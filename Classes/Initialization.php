<?php

namespace Mediatis\FormrelayPasswordProvider;

use FormRelay\Core\Service\RegistryInterface;
use FormRelay\PasswordProvider\PasswordProviderInitialization;

class Initialization
{
    public function initialize(RegistryInterface $registry): void
    {
        PasswordProviderInitialization::initialize($registry);
    }
}
