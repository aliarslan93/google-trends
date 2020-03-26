<?php declare(strict_types=1);

namespace GSoares\GoogleTrends\Result;

use JsonSerializable;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class RelatedResult implements JsonSerializable
{
    /**
     * @var string
     */
    private $term;

    /**
     * @var bool
     */
    private $hasData;

    /**
     * @var int
     */
    private $ranking;

    /**
     * @var string
     */
    private $searchUrl;

    public function __construct(string $term, bool $hasData, int $ranking, string $searchUrl)
    {
        $this->term = $term;
        $this->hasData = $hasData;
        $this->ranking = $ranking;
        $this->searchUrl = $searchUrl;
    }

    public function getTerm(): string
    {
        return $this->term;
    }

    public function hasData(): bool
    {
        return $this->hasData;
    }

    public function getRanking(): int
    {
        return $this->ranking;
    }

    public function getSearchUrl(): string
    {
        return $this->searchUrl;
    }

    public function jsonSerialize(): array
    {
        return [
            'term' => $this->getTerm(),
            'hasData' => $this->hasData(),
            'ranking' => $this->getRanking(),
            'searchUrl' => $this->getSearchUrl(),
        ];
    }
}