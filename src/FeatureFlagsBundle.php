<?php
declare(strict_types=1);

namespace Torr\FeatureFlags;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Torr\BundleHelpers\Bundle\BundleExtension;

final class FeatureFlagsBundle extends Bundle
{
	/**
	 * @inheritDoc
	 */
	public function getContainerExtension() : ExtensionInterface
	{
		return new BundleExtension($this);
	}

	/**
	 * @inheritDoc
	 */
	public function getPath() : string
	{
		return \dirname(__DIR__);
	}
}
