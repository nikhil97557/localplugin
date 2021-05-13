<?php

/**
 * Version details.
 *
 * @package    local_testlocal
 * @author     Andreas Grabs <moodle@grabs-edv.de>
 * @copyright  Andreas Grabs
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function local_testlocal_before_footer()
{
    \core\notification::add('message a tes message', \core\output\notification::NOTIFY_SUCCESS);
}