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
 * Coverage information for the local_codechecker plugin.
 *
 * @package   local_moodlecheck
 * @category  test
 * @copyright 2023 onwards Eloy Lafuente (stronk7) {@link https://stronk7.com}
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Anonymous phpunit_coverage_info returning the areas to include and exclude.
 */
return new class extends phpunit_coverage_info {
    /** @var array The list of folders relative to the plugin root to include in coverage generation. */
    protected $includelistfolders = [
        'rules',
    ];

    /** @var array The list of files relative to the plugin root to include in coverage generation. */
    protected $includelistfiles = [
        'file.php',
    ];

    /** @var array The list of folders relative to the plugin root to exclude from coverage generation. */
    protected $excludelistfolders = [];

    /** @var array The list of files relative to the plugin root to exclude from coverage generation. */
    protected $excludelistfiles = [];
};
