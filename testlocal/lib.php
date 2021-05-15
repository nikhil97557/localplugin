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

global $DB, $USER;

$sql = "SELECT lm.id, lm.messagetext, lm.messagetype 
            FROM {message_localtest} lm 
            left outer join {message_read_localtest} lmr ON lm.id = lmr.messageid 
            WHERE lmr.userid <> :userid 
            OR lmr.userid IS NULL";
    $params = [
        'userid' => $USER->id,
    ];

    $messages = $DB->get_records_sql($sql, $params);

foreach ($messages as $message)
{
  
    $type=\core\output\notification::NOTIFY_INFO;

    // if($message->messagetype == '0')
    {
        $type=\core\output\notification::NOTIFY_WARNING;
       
    }
    if($message->messagetype == '1')
    {
        $type=\core\output\notification::NOTIFY_SUCCESS;
        
    }
    if($message->messagetype == '2')
    {
        $type=\core\output\notification::NOTIFY_ERROR;
        
    }
        \core\notification::add($message->messagetext, $type);


        $readrecord=new stdclass();
        $readrecord->messageid=$message->id;
        $readrecord->userid=$USER->id;
        $readrecord->timeread=time();
        $DB->insert_record('message_read_localtest',$readrecord);


}


}