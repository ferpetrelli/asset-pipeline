<?php namespace Codesleeve\AssetPipeline\Filters;

use Assetic\Asset\AssetInterface;
use Assetic\Filter\FilterInterface;

class GzipFilter implements FilterInterface
{
    public function filterLoad(AssetInterface $asset)
    {

    }

    public function filterDump(AssetInterface $asset)
    {
      $asset->setContent(gzencode($asset->getContent()));
    }
}
