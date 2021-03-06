<?php

/**
 * web app loader start
 *
 * @since 2.0.2
 * @deprecated 2.0.0
 *
 * @package Redaxscript
 * @category Modules
 * @author Henry Ruhs
 */

function web_app_loader_start()
{
	global $loader_modules_scripts;
	$loader_modules_scripts[] = 'modules/web_app/scripts/startup.js';
	$loader_modules_scripts[] = 'modules/web_app/scripts/web_app.js';
}

/**
 * web app render start
 *
 * @since 2.0.2
 * @deprecated 2.0.0
 *
 * @package Redaxscript
 * @category Modules
 * @author Henry Ruhs
 */

function web_app_render_start()
{
	if (FIRST_PARAMETER === 'manifest_webapp')
	{
		header('content-type: application/x-web-app-manifest+json');
		include_once('modules/web_app/files/manifest.json');
		define('RENDER_BREAK', 1);
	}
}

/**
 * web app head start
 *
 * @since 2.0.2
 * @deprecated 2.0.0
 *
 * @package Redaxscript
 * @category Modules
 * @author Henry Ruhs
 */

function web_app_head_start()
{
	$output = '<meta name="apple-mobile-web-app-capable" content="yes">' . PHP_EOL;
	echo $output;
}

/**
 * web app head end
 *
 * @since 2.0.2
 * @deprecated 2.0.0
 *
 * @package Redaxscript
 * @category Modules
 * @author Henry Ruhs
 */

function web_app_head_end()
{
	$output = '<link href="' . ROOT . '/modules/web_app/images/icon.png" rel="apple-touch-icon-precomposed" />' . PHP_EOL;
	echo $output;
}
?>