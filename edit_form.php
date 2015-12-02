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
 * All Discussions block settings file
 *
 * @package    contrib
 * @subpackage block_all_discussions
 * @copyright  2015 Matthew Davidson
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_all_discussions_edit_form extends block_edit_form {

    protected function specific_definition($mform) {
        global $DB, $COURSE;

        // Start block specific section in config form.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        // Shown options.
        $showoptions = array();
        for ($i = 0; $i <= $this->block->maxshowoption; $i++) {
            $showoptions[] = $i;
        }
        $showoptions[0] = get_string('none', 'block_all_discussions');

        // Control visibility of random posts.
        $mform->addElement('select', 'config_randomposts', get_string('randomposts', 'block_all_discussions'), $showoptions);
        $mform->setDefault('config_randomposts', $this->block->defaultlimits['randomposts']);
        $mform->addHelpButton('config_randomposts', 'config_show', 'block_all_discussions');

        // Control visibility of timed posts.
        $mform->addElement('select', 'config_timedposts', get_string('timedposts', 'block_all_discussions'), $showoptions);
        $mform->setDefault('config_timedposts', $this->block->defaultlimits['timedposts']);
        $mform->addHelpButton('config_timedposts', 'config_show', 'block_all_discussions');

        // Control visibility of active posts.
        $mform->addElement('select', 'config_oldestposts', get_string('oldestposts', 'block_all_discussions'), $showoptions);
        $mform->setDefault('config_oldestposts', $this->block->defaultlimits['oldestposts']);
        $mform->addHelpButton('config_oldestposts', 'config_show', 'block_all_discussions');

        // Control visibility of own posts.
        $mform->addElement('select', 'config_yourposts', get_string('yourpostsconfig', 'block_all_discussions'),
              $showoptions);
        $mform->setDefault('config_yourposts', $this->block->defaultlimits['yourposts']);
        $mform->addHelpButton('config_yourposts', 'config_show', 'block_all_discussions');

        $forums = $DB->get_records('forum', array('course' => $COURSE->id), 'name ASC');
        $selectoptions = array();
        foreach ($forums as $id => $forum) {
            $selectoptions[$forum->id] = $forum->name;
        }
        if (empty($forums)) {
            $mform->addElement('html', get_string('noforatoexclude', 'block_all_discussions'));
        }
        else {
            $elementname = get_string('excludefora', 'block_all_discussions');
            $select = &$mform->addElement('select', 'config_exclude', $elementname, $selectoptions);
            $select->setMultiple(true);
            $select->setSelected($this->block->config->exclude);
            $mform->addHelpButton('config_exclude', 'config_exclude', 'block_all_discussions');
        }
    }
}
