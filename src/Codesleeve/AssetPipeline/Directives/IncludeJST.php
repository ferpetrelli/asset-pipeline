<?php

namespace Codesleeve\AssetPipeline\Directives;

class IncludeJST extends BaseDirective {

	public function process()
	{
		return ['_jst_.js'];
	}

}