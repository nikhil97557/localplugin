<?php

/**
 * Version details.
 *
 * @package    local_testlocal
 * @author     Andreas Grabs <moodle@grabs-edv.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once(__DIR__ . '/../../config.php');

global $DB;

$PAGE->set_url(new moodle_url('/local/testlocal/manage.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('manage messages');

$messages=$DB->get_records('message_localtest');
echo $OUTPUT->header();

$templatecontext=(object)[
'messages'=>array_values($messages),
'editurl'=>new moodle_url('/local/testlocal/edit.php'),
'updateurl'=>new moodle_url('/local/testlocal/update.php'),
];

echo $OUTPUT->render_from_template('local_testlocal/manage',$templatecontext);

echo $OUTPUT->footer();
