<?php

/**
 * The home manager controller for modExtra.
 *
 */
class modExtraHomeManagerController extends modExtraManagerController
{
    /** @var modExtra $modExtra */
    public $modExtra;


    /**
     *
     */
    public function initialize()
    {
        $this->modExtra = $this->modx->getService('modExtra', 'modExtra', MODX_CORE_PATH . 'modExtra/core/components/modextra/model/');
        #$this->modExtra = $this->modx->getService('modExtra', 'modExtra', MODX_BASE_PATH . 'components/modextra/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['modextra:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('modextra');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss('../modExtra/assets/components/modextra/css/mgr/main.css');
        $this->addJavascript('../modExtra/assets/components/modextra/js/mgr/app.js');
        /*
        $this->addCss($this->modExtra->config['cssUrl'] . 'mgr/main.css');
        $this->addCss($this->modExtra->config['jsUrl'] . 'mgr/dist/css/app.css');
        $this->addCss($this->modExtra->config['jsUrl'] . 'mgr/dist/css/chunk-vendors.css');

        $this->addJavascript($this->modExtra->config['jsUrl'] . 'mgr/dist/js/chunk-vendors.js');
        $this->addJavascript($this->modExtra->config['jsUrl'] . 'mgr/dist/js/app.js');
        */
        $this->addHtml('<script type="text/javascript">
            var modExtra = {
                connector_url: "' . $this->modExtra->config['connectorUrl'] . '",
                modAuth: "' . $this->modx->user->getUserToken($this->modx->context->get('key')) . '",
            };
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="modextra-panel-home-div"></div>';

        return '';
    }
}