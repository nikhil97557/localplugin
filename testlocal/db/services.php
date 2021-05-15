<?php

// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External Web Service Template
 *
 * @package    services
 * Developer: 2020 Ricoshae Pty Ltd (http://ricoshae.com.au)
 */

// We defined the web service functions to install.
$functions = array(
         'local_testlocal_getajaxtest' => array(
                'classname'   => 'local_testlocal_external',
                'methodname'  => 'getajaxtest',
                'classpath'   => 'local/testlocal/externallib.php',
                'description' => 'Return ajax demo text',
                'type'        => 'read',
                'ajax' => true,
                'capabilities' => '',
                'loginrequired' => true
//                'services' => array(MOODLE_OFFICIAL_MOBILE_SERVICE)
          )
);
