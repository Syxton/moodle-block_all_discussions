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
 * All Discussions block language strings
 *
 * @package    contrib
 * @subpackage block_all_discussions
 * @copyright  2015 Matthew Davidson
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['config_show'] = 'Showing All Discussions';
$string['config_show_help'] = '
<p>With this setting, you can control whether the user will see:</p>
<ul>
	<li>all discussions the user has begun themselves,</li>
	<li>all discussions begun by others, and/or</li>
	<li>random discussions begun by others (and not yet shown in the block)</li>
</ul>
<p>The quantity of discussions from each type can be specified by number.</p>
<p>To disable a type of message, set the number of displayed messages to None.</p>
';
$string['config_exclude'] = 'Excluding Forums';
$string['config_exclude_help'] = '
<p>There are some forums you will not want checked for unanswered postings, usually because these forums are used to broadcast messages that no-one will respond to.
Among these are News forums, which are initially excluded by default.</p>
<p>You can select more than one forum by holding the control key and using the mouse to select the forums containing discussions you do not want to appear in the block. (Mac users should use Command and click.)</p>
';
$string['excludefora'] = 'Excluded Forums';
$string['noforatoexclude'] = 'There are no forums to exclude';
$string['none'] = 'None';
$string['nodiscussions'] = 'No discussions';
$string['oldestposts'] = 'Active Discussions';
$string['pluginname'] = 'All Discussions';
$string['randomposts'] = 'Random Discussions';
$string['show'] = 'Show';
$string['alldiscussions'] = 'All Discussions';
$string['all_discussions:addinstance'] = 'Add a new All Discussions block';
$string['yourposts'] = 'Your Discussions';
$string['timedposts'] = 'All Discussions';
$string['yourpostsconfig'] = 'User\'s Discussions';