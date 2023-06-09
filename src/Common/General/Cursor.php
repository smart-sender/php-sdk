<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\General;

use JsonSerializable;

/**
 * The cursor indicates the current page in the selection and the maximum number of pages in the specified resource to iterate over.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676543074/Cursor+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class Cursor implements JsonSerializable
{
    /**
     * @var int
     */
    private int $page;

    /**
     * @var int
     */
    private int $pages;

    /**
     * Setup current page and total.
     *
     * @param int $page
     * @param int $pages
     */
    public function __construct(int $page, int $pages)
    {
        $this->page = $page;
        $this->pages = $pages;
    }

    /**
     * Creates from static context.
     *
     * @param array $context
     *
     * @return static
     */
    public static function create(array $context): self
    {
        return new self($context['page'], $context['pages']);
    }

    /**
     * Retrieve current page.
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * Retrieve pages total.
     *
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
    }

    /**
     * Verifies for next cursor.
     *
     * @return bool
     */
    public function hasNext(): bool
    {
        return $this->page < $this->pages;
    }

    /**
     * Verifies for first page.
     *
     * @return bool
     */
    public function isFirstPage(): bool
    {
        return 1 === $this->page;
    }

    /**
     * Verifies for last page.
     *
     * @return bool
     */
    public function isLastPage(): bool
    {
        return $this->page === $this->pages;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'page' => $this->page,
            'pages' => $this->pages,
        ];
    }
}
