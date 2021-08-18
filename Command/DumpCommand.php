<?php

/*
 * This file is part of the NelmioApiDocBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Command;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Nelmio\ApiDocBundle\Extractor\ApiDocExtractor;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Routing\RouterInterface;
use Nelmio\ApiDocBundle\Formatter\FormatterInterface;

class DumpCommand extends Command
{
    protected static $defaultName = 'api:doc:dump';

    /**
     * @var array
     */
    protected $availableFormats = array('markdown', 'json', 'html');

    /**
     * @var RouterInterface
     */
    protected $router;

    /**
     * @var ApiDocExtractor
     */
    protected $extractor;

    /**
     * @var FormatterInterface
     */
    protected $simpleFormatter;

    /**
     * @var FormatterInterface
     */
    protected $markdownFormatter;

    /**
     * @var FormatterInterface
     */
    protected $htmlFormatter;

    public function __construct(
        RouterInterface $router,
        ApiDocExtractor $extractor,
        FormatterInterface $simpleFormatter,
        FormatterInterface $markdownFormatter,
        FormatterInterface $htmlFormatter
    ) {
        $this->router = $router;
        $this->extractor = $extractor;
        $this->simpleFormatter = $simpleFormatter;
        $this->markdownFormatter = $markdownFormatter;
        $this->htmlFormatter = $htmlFormatter;

        parent::__construct();
    }


    protected function configure()
    {
        $this
            ->setDescription('Dumps API documentation in various formats')
            ->addOption(
                'format', '', InputOption::VALUE_REQUIRED,
                'Output format like: ' . implode(', ', $this->availableFormats),
                $this->availableFormats[0]
            )
            ->addOption('view', '', InputOption::VALUE_OPTIONAL, '', ApiDoc::DEFAULT_VIEW)
            ->addOption('no-sandbox', '', InputOption::VALUE_NONE)
            ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $format = $input->getOption('format');
        $view = $input->getOption('view');

        $routeCollection = $this->router->getRouteCollection();

        if ($format == 'json') {
            $formatter = $this->simpleFormatter;
        } else {
            switch ($format) {
                case 'markdown':
                    $formatter = $this->markdownFormatter;
                    break;
                case 'html':
                    $formatter = $this->htmlFormatter;
                    break;
                default:
                    throw new \RuntimeException(sprintf('Format "%s" not supported.', $format));
            }
        }

        if ($input->getOption('no-sandbox') && 'html' === $format) {
            $formatter->setEnableSandbox(false);
        }

        $extractedDoc = $this->extractor->all($view);
        $formattedDoc = $formatter->format($extractedDoc);

        if ('json' === $format) {
            $output->writeln(json_encode($formattedDoc));
        } else {
            $output->writeln($formattedDoc, OutputInterface::OUTPUT_RAW);
        }

        return 0;
    }
}
