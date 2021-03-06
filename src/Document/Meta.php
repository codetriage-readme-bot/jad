<?php

namespace Jad\Document;

/**
 * Class Meta
 * @package Jad\Document
 */
class Meta implements \JsonSerializable
{
    /**
     * @var int
     */
    private $count;

    /**
     * @var int
     */
    private $pages;

    /**
     * @param int $count
     */
    public function setCount(int $count)
    {
        $this->count = $count;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $pages
     */
    public function setPages(int $pages)
    {
        $this->pages = $pages;
    }

    /**
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        $isEmpty = true;

        if($this->count !== null) {
            $isEmpty = false;
        }

        if($this->pages !== null) {
            $isEmpty = false;
        }

        return $isEmpty;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): \stdClass
    {
        $meta = new \stdClass();

        if($this->count !== null) {
            $meta->count = $this->count;
        }

        if($this->pages !== null) {
            $meta->pages = $this->pages;
        }

        return $meta;
    }
}