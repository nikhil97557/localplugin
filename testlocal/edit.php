<?php

/**
 * Version details.
 *
 * @package    local_testlocal
 * @author     Andreas Grabs <moodle@grabs-edv.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_once($CFG->dirroot . '/local/testlocal/classes/form/edit.php');

global $DB;

$PAGE->set_url(new moodle_url('/local/testlocal/manage.phpp'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('EDIT');
$PAGE->requires->js('/local/testlocal/assets/js_ajaxdemo.js');
require_login();
// HERE WE CREATE A FROM

$mform=new edit();


//Form processing and displaying is done here
if ($mform->is_cancelled()) {
 // Go back to manage.php page
 redirect($CFG->wwwroot . '/local/testlocal/manage.php','You cancelled the message form');

} else if ($fromform = $mform->get_data()) {
  //Inert data into database.
    $recordtoinsert = new stdclass();
    $recordtoinsert->messagetext=$fromform->messagetext;
    $recordtoinsert->messagetype=$fromform->messagetype;
    $DB->insert_record('message_localtest',$recordtoinsert);
    
    // go back to manage.php page

    redirect($CFG->wwwroot . '/local/testlocal/manage.php','You created message with title' . $fromform->messagetext);



}

echo $OUTPUT->header();

$mform->display();

echo $OUTPUT->footer();

