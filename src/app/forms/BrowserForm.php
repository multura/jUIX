<?php
namespace app\forms;

use std, gui, framework, app;


class BrowserForm extends AbstractForm
{




    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $e = null)
    {    
        
// ВНИМАНИЕ, скрипт работает только при отображаемом визуально браузере!

// Какой-нибудь html текст ...
$html = '<meta http-equiv="refresh" content="0;url=http://google.com/"">';

// Используем engine и метод для загрузки контента.
$this->browser->engine->loadContent($html, 'text/html');
    
    }

    /**
     * @event button5.click-Left 
     */
    function doButton5ClickLeft(UXMouseEvent $e = null)
    {
                
        // ВНИМАНИЕ, скрипт работает только при отображаемом визуально браузере!
        
        // Какой-нибудь html текст ...
        $html = '<meta http-equiv="refresh" content="0;url=http://mini.ya.ru/"">';
        
        // Используем engine и метод для загрузки контента.
        $this->browser->engine->loadContent($html, 'text/html');
            
    }

    /**
     * @event showing 
     */
    function doShowing(UXWindowEvent $e = null)
    {    
        // ВНИМАНИЕ, скрипт работает только при отображаемом визуально браузере!
        
        // Какой-нибудь html текст ...
        $html = '<span style="font-family: Tahoma, tahoma, sans-serif;">Пусто... Нажми на кнопку "Список"</span>';
        
        // Используем engine и метод для загрузки контента.
        $this->browser->engine->loadContent($html, 'text/html');
    }

    /**
     * @event button6.click-Left 
     */
    function doButton6ClickLeft(UXMouseEvent $e = null)
    {
                
        // ВНИМАНИЕ, скрипт работает только при отображаемом визуально браузере!
        
        // Какой-нибудь html текст ...
        $html = '<meta http-equiv="refresh" content="0;url=http://uzbekistation.serv00.net/m/index.html"">';
        
        // Используем engine и метод для загрузки контента.
        $this->browser->engine->loadContent($html, 'text/html');
            
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $e = null)
    {    
        
    }


}
