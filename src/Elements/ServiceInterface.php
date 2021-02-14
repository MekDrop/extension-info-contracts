<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Defines service description
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface ServiceInterface
{

    /**
     * Service name in container
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Gets if service is shared (created only once)
     *
     * @return bool
     */
    public function isShared(): bool;

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags(): array;

    /**
     * Gets arguments array when creating service
     *
     * @return mixed[]
     */
    public function getArguments(): array;

    /**
     * Gets methods calls that will be invoked
     *
     * @return MethodCallInterface[]
     */
    public function getMethodCall(): array;

}