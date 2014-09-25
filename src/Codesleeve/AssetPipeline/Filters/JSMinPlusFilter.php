<?php namespace Codesleeve\AssetPipeline\Filters;

use Assetic\Asset\AssetInterface;
use Assetic\Filter\FilterInterface;

class JSMinPlusFilter implements FilterInterface
{
    public function filterLoad(AssetInterface $asset)
    {

    }

    public function filterDump(AssetInterface $asset)
    {
		$asset->setContent(\JShrink\Minifier::minify($asset->getContent()) . ';');
    }
}
