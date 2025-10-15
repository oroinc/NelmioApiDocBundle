<?php

namespace Nelmio\ApiDocBundle\Twig\Extension;

use Michelf\MarkdownExtra;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class MarkdownExtension extends AbstractExtension
{
    protected $markdownParser;

    public function __construct()
    {
        $this->markdownParser = new MarkdownExtra();
    }

    /**
     * {@inheritdoc}
     */
    #[\Override]
    public function getFilters()
    {
        return array(
            new TwigFilter('extra_markdown', $this->markdown(...), array('is_safe' => array('html'))),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'nelmio_api_doc';
    }

    public function markdown($text)
    {
        return $this->markdownParser->transform($text);
    }
}
