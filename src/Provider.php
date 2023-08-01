<?php
/**
 * Language service provider.
 *
 * This is the service provider for the language system, which binds an instance
 * of the framework's `Language` class to the container.
 *
 * @package   HybridLang
 * @link      https://github.com/themehybrid/hybrid-lang
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2023, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Lang;

use Hybrid\Core\ServiceProvider;
use Hybrid\Lang\Contracts\Language;

/**
 * Language provider.
 *
 * @since  1.0.0
 *
 * @access public
 */
class Provider extends ServiceProvider {

    /**
     * Registration callback that adds a single instance of the language
     * system to the container.
     *
     * @since  1.0.0
     * @return void
     *
     * @access public
     */
    public function register() {
        $this->app->singleton( Language::class, Component::class );
    }

    /**
     * Boots the language system by firing its hooks in the `boot()` method.
     *
     * @since  1.0.0
     * @return void
     *
     * @access public
     */
    public function boot() {
        $this->app->resolve( Language::class )->boot();
    }

}
