<?php

namespace Symbiote\Notifications\Controller;

use SilverStripe\Admin\ModelAdmin;
use Symbiote\Notifications\Model\SystemNotification;

/**
 * @author  marcus@symbiote.com.au
 * @author  nikspijkerman@gmail.com
 * @license http://silverstripe.org/bsd-license/
 */
class NotificationAdmin extends ModelAdmin
{
    private static $managed_models = [
        SystemNotification::class,
    ];

    private static $url_segment = 'notifications';

    private static $menu_title = 'Notifications';

    private static $menu_icon = 'symbiote/silverstripe-notifications: images/notifications-icon.svg';
}
