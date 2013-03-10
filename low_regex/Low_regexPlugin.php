<?php

namespace Craft;

class Low_regexPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('Low Regex');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Lodewijk Schutte';
	}

	public function getDeveloperUrl()
	{
		return 'http://gotolow.com';
	}

	public function hookAddTwigExtension()
	{
		Craft::import('plugins.low_regex.twigextensions.Low_regexTwigExtension');

		return new Low_regexTwigExtension();
	}
}
