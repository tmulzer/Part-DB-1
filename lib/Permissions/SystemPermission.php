<?php
/**
 * Created by PhpStorm.
 * User: janhb
 * Date: 21.09.2017
 * Time: 14:23
 */

namespace PartDB\Permissions;


class SystemPermission extends BasePermission
{
    const USE_DEBUG  = "use_debug";

    /**
     * Returns an array of all available operations for this Permission.
     * @return array All availabel operations.
     */
    public static function listOperations()
    {
        /**
         * Dont change these definitions, because it would break compatibility with older database.
         * However you can add other definitions, the return value can get high as 30, as the DB uses a 32bit integer.
         */
        $operations = array();
        $operations[] = static::buildOperationArray(0, static::USE_DEBUG, _("Debugtools benutzen"));
        return $operations;
    }
}