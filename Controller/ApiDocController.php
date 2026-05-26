<?php

/*
 * This file is part of the NelmioApiDocBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Nelmio\ApiDocBundle\Extractor\ApiDocExtractor;
use Nelmio\ApiDocBundle\Formatter\HtmlFormatter;
use Nelmio\ApiDocBundle\Formatter\RequestAwareSwaggerFormatter;
use Nelmio\ApiDocBundle\Formatter\SwaggerFormatter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiDocController
{
    public function __construct(
        private ApiDocExtractor $extractor,
        private HtmlFormatter $htmlFormatter,
        private SwaggerFormatter $swaggerFormatter
    ) {
    }

    public function indexAction($view = ApiDoc::DEFAULT_VIEW)
    {
        $extractedDoc = $this->extractor->all($view);
        $htmlContent  = $this->htmlFormatter->format($extractedDoc);

        return new Response($htmlContent, Response::HTTP_OK, array('Content-Type' => 'text/html'));
    }

    public function swaggerAction(Request $request, $resource = null)
    {
        $docs = $this->extractor->all();
        $formatter = new RequestAwareSwaggerFormatter($request, $this->swaggerFormatter);

        $spec = $formatter->format($docs, $resource ? '/' . $resource : null);

        if ($resource !== null && count($spec['apis']) === 0) {
            throw new NotFoundHttpException(sprintf('Cannot find resource "%s"', $resource));
        }

        return new JsonResponse($spec);
    }
}
