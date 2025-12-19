<?php
namespace app\forms;

use std, gui, framework, app;


class MarketplaceForm extends AbstractForm
{


    /**
     * @event showing 
     */
    function doShowing(UXWindowEvent $e = null)
    {    
        
    }




    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $e = null)
    {    
// ВНИМАНИЕ, скрипт работает только при отображаемом визуально браузере!

// Какой-нибудь html текст ...
$html = '<meta http-equiv="refresh" content="0;url=http://unified.uzbekistation.serv00.net/juix/marketplace/"">';

// Используем engine и метод для загрузки контента.
$this->browser->engine->loadContent($html, 'text/html');
    }



}
