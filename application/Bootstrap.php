<?php
class Bootstrap extends Ot_Application_Bootstrap_Bootstrap
{        
    public function _initHead()
    {
        $hr = new Ot_Layout_HeadRegister();
        $hr->registerCssFile('css/launchpad.css');
    }
}