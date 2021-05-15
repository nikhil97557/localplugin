<?php

/**
 * Version details.
 *
 * @package    local_testlocal
 * @author     Andreas Grabs <moodle@grabs-edv.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 require_once("$CFG->libdir/formslib.php");
 
class edit extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;
        $mform = $this->_form; // Don't forget the underscore! 
 
        $mform->addElement('text', 'messagetext','Message Text'); // Add elements to your form
        $mform->setType('messagetext', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('messagetext', 'Please enter a message');        //Default value


        $choice=array();
        $choice['0']=\core\output\notification::NOTIFY_WARNING;
        $choice['1']=\core\output\notification::NOTIFY_SUCCESS;
        $choice['2']=\core\output\notification::NOTIFY_ERROR;
        $choice['3']=\core\output\notification::NOTIFY_INFO;
        $mform->addElement('select', 'messagetype', 'Message Type',$choice); // Add elements to your form
        $mform->setDefault('messagetype','3');        //Default value
        $this->add_action_buttons();
        $mform->addElement('html','<input type="button" onclick="testajax()" value="checkajax">');
        
    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}