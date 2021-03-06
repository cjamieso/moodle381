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

namespace report_analytics\output;

defined('MOODLE_INTERNAL') || die;

/**
 * Holds the data needed to draw an activity chart on the screen.
 *
 * @package    report_analytics
 * @copyright  2017 Craig Jamieson
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class forumtimelinechart_renderable extends activitytimelinechart_renderable {

    /**
     * Constructor.
     *
     * @param  int    $courseid  the ID of the course to use
     * @param  array  $options   array of additional options
     * @param  array  $filters   the filters employed by the user
     */
    public function __construct($courseid, $options = array(), $filters = array()) {

        parent::__construct($courseid, $options, $filters);
        $this->options['types'] = 'forum';
    }

}
