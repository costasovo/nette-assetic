<?php

namespace Tripomatic\NetteAssetic\Latte;

use Assetic\AssetManager;

class AssetFilter
{
	/** @var AssetManager */
	private $assetManager;

	public function __construct(AssetManager $assetManager)
	{
		$this->assetManager = $assetManager;
	}


	public function __invoke(string $assetName): string
	{
		$asset = $this->assetManager->get($assetName);

		return $asset->getTargetPath();
	}
}
