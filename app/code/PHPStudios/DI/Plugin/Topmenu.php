<?php
namespace PHPStudios\DI\Plugin;

use Magento\Customer\Model\Session;

class Topmenu
{
    /**
     * @param Session $session
     */
    public function __construct(
        Session $session
    ) {
        $this->Session = $session;
    }

    public function afterGetHtml(\Magento\Theme\Block\Html\Topmenu $topmenu, $html)
    {
        $swappartyUrl = $topmenu->getUrl('phpstudios/assignment');//here you can set link
        $magentoCurrentUrl = $topmenu->getUrl('*/*/*', ['_current' => true, '_use_rewrite' => true]);
        if (strpos($magentoCurrentUrl, 'phpstudios/assignment') !== false) {
            $html .= "<li class=\"level0 nav-5 active level-top parent ui-menu-item\">";
        } else {
            $html .= "<li class=\"level0 nav-4 level-top parent ui-menu-item\">";
        }
        $html .= "<a href=\"" . $swappartyUrl . "\" class=\"level-top ui-corner-all\"><span class=\"ui-menu-icon ui-icon ui-icon-carat-1-e\"></span><span>" . __("Muhammad Kaleem") . "</span></a>";
        $html .= "</li>";
        return $html;
    }
}
