<?php

/**
 * Version details.
 *
 * @package    local_testlocal
 * @author     Andreas Grabs <moodle@grabs-edv.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once(__DIR__ . '/../../config.php');
$PAGE->set_url(new moodle_url('/local/testlocal/manage.phpp'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('manage messages');

echo $OUTPUT->header();

echo '<h1>HELLO</h1>';

echo $OUTPUT->footer();
