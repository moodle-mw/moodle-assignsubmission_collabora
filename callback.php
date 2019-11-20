<?php
// This file is part of Moodle - http://moodle.org/
//
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
 * The collabora callback file.
 *
 * @package   assignsubmission_collabora
 * @copyright 2019 Synergy Learning
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
//use mod_collabora\collabora;

require_once(__DIR__.'/../../../../config.php');

global $CFG;
require_once($CFG->libdir.'/filelib.php');
require_once(__DIR__ . '/classes/callbacklib.php');

$relativepath = get_file_argument();
$accesstoken = required_param('access_token', PARAM_ALPHANUMEXT);
$postdata = file_get_contents('php://input');

// Functionality moved to class for testing.
callbacklib::handle_request($relativepath, $accesstoken, $postdata);

