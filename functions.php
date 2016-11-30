<?php

Class Site
{
	/**
	 * First element is the default lang
	 *
	 * @var Array
	 */
	protected $allowedLangs = ['zh', 'en'];

	/**
	 * @var String
	 */
	protected $viewsPath = './views/';

	/**
	 * @var String
	 */
	protected $homeRoute = 'home';

	/**
	 * Get lang from url
	 *
	 * @return String language
	 */
	public function getLang()
	{
		if (isset($_GET['t'])) {
			return in_array($_GET['t'], $this->allowedLangs) ? $_GET['t'] : $this->allowedLangs[0];
		}
		return $this->allowedLangs[0];
	}

	/**
	 * Get view name from url
	 *
	 * @return String route
	 */
	public function getViewName()
	{
		return isset($_GET['v']) ? $_GET['v'] : $this->homeRoute;
	}

	/**
	 * Helper of routing
	 *
	 * @param String|Null $viewName
	 * @param String|Null $lang
	 * @return String path
	 */
	public function getRoute($viewName = null, $lang = null)
	{
		$viewName = isset($viewName) ? $viewName : $this->getViewName();
		$lang = isset($lang) ? $lang : $this->getLang();
		return "/index.php?v=$viewName&t=$lang";
	}

	/**
	 * Helper of rendering
	 *
	 * @return null
	 */
	public function render()
	{
		$viewFile = $this->viewsPath . $this->getViewName() . '.php';
		if (!file_exists($viewFile)) {
			require_once($this->viewsPath . '404.php');
		} else {
			require_once($viewFile);
		}
	}

	/**
	 * Helper of translation
	 *
	 * @return Mixed translation
	 */
	public function getTranslation()
	{
		return require('./translations/' . $this->getLang() . '.php');
	}

}

$site = new Site();

