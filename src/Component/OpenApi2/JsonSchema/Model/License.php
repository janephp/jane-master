<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class License extends \ArrayObject
{
    /**
     * The name of the license type. It's encouraged to use an OSI compatible license.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The URL pointing to the license.
     *
     * @var string|null
     */
    protected $url;

    /**
     * The name of the license type. It's encouraged to use an OSI compatible license.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the license type. It's encouraged to use an OSI compatible license.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The URL pointing to the license.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * The URL pointing to the license.
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
