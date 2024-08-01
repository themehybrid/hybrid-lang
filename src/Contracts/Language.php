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
 *
 * @since  1.0.0
 *
 * @access public
 */
interface Language extends Bootable {

    /**
     * Returns the parent theme textdomain.
     *
     * @since  1.0.0
     * @return string
     *
     * @access public
     */
    public function parentTextdomain();

    /**
     * Returns the child theme textdomain.
     *
     * @since  1.0.0
     * @return string
     *
     * @access public
     */
    public function childTextdomain();

    /**
     * Returns the full directory path for the parent theme's domain path
     * and should allow a file/path to be appended.
     *
     * @since  1.0.0
     * @param  string $file
     * @return string
     *
     * @access public
     */
    public function parentPath( $file = '' );

    /**
     * Returns the full directory path for the child theme's domain path
     * and should allow a file/path to be appended.
     *
     * @since  1.0.0
     * @param  string $file
     * @return string
     *
     * @access public
     */
    public function childPath( $file = '' );

}
