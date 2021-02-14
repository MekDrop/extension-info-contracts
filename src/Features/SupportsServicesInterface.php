<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\ServiceInterface;

/**
 * If extension supports services definition this interface also needs to be used
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsServicesInterface
{

    /**
     * Gets services
     *
     * @return ServiceInterface[]
     */
    public function getServices(): iterable;

    /**
     * Gets class names of service providers
     *
     * @return string[]
     */
    public function getServiceProviders(): iterable;

}