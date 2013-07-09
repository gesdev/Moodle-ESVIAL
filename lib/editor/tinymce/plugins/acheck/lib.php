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

defined('MOODLE_INTERNAL') || die();

/**
 * Plugin for checking accessibility of content.
 *
 * @package   tinymce_acheck
 * @copyright http://atutor.ca/achecker/download.php
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class tinymce_acheck extends editor_tinymce_plugin {
    /** @var array list of buttons defined by this plugin */
    protected $buttons = array('acheck');

    protected function update_init_params(array &$params, context $context,
            array $options = null) {

	// Add button after 'unlink' in advancedbuttons3.
	$this->add_button_after($params, 3, 'acheck');

        // Add JS file, which uses default name.
        $this->add_js_plugin($params);
    }
}
