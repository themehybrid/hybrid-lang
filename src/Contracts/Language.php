<?php
/**
 * Language interface.
 *
 * Defines the contract that a language class should use.
 *
 * @package   HybridLang
 * @link      https://github.com/themehybrid/hybrid-lang
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2024, Theme Hybrid
 * @license   https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Lang\Contracts;

use Hybrid\Contracts\Bootable;

/**
 * Language interface.
 */
interface Language extends Bootable {

    /**
     * Returns the parent theme textdomain.
     *
     * @return string
     */
    public function parentTextdomain();

    /**
     * Returns the child theme textdomain.
     *
     * @return string
     */
    public function childTextdomain();

    /**
     * Returns the full directory path for the parent theme's domain path
     * and should allow a file/path to be appended.
     *
     * @param string $file
     * @return string
     */
    public function parentPath( $file = '' );

    /**
     * Returns the full directory path for the child theme's domain path
     * and should allow a file/path to be appended.
     *
     * @param string $file
     * @return string
     */
    public function childPath( $file = '' );

}
