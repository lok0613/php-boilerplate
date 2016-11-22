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
	 * Getter of language
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
	 * Helper of routing
	 *
	 * @param String $viewName
	 * @return String path
	 */
	public function getRoute($viewName)
	{
		return "/index.php?v=$viewName&t={getLang()}";
	}

	/**
	 * Helper of rendering
	 *
	 * @param String $viewNAme
	 * @return null
	 */
	public function render($viewName)
	{
		$viewFile = $this->viewsPath . $viewName . '.php';
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

