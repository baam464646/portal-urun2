<?php
namespace kouosl\urun2\controllers\api;


/**
 * Default controller for the `urun2` module
 */
class DefaultController extends \kouosl\base\controllers\api\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
