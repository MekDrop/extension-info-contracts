<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Describes method call
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface MethodCallInterface
{

    /**
     * Method name to be called
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Gets arguments array to used for this method call
     *
     * @return mixed[]
     */
    public function getArguments(): array;
}