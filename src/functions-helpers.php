<?php
/**
 * Language-related functions.
 *
 * Internationalization and translation functions that are mostly useful in the
 * framework but might be needed for themes.
 *
 * @package   HybridLang
 * @link      https://github.com/themehybrid/hybrid-lang
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2024, Theme Hybrid
 * @license   https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Lang;

if ( ! function_exists( __NAMESPACE__ . '\\hierarchy' ) ) {
    /**
     * Returns a hierarchy based on the locale, language, region, and text direction.
     * This can be useful for loading functions, files, scripts, or styles based on
     * the site's locale. Note that the locale is all lowercase and hyphenated (for
     * example, `en_US` becomes `en-us`).
     *
     * @return array
     */
    function hierarchy() {

        $locale = strtolower( str_replace( '_', '-', is_admin() ? get_user_locale() : get_locale() ) );
        $lang   = strtolower( language() );
        $region = strtolower( region() );

        $hier = [ $locale ];

        if ( $region !== $locale ) {
            $hier[] = $region;
        }

        if ( $lang !== $locale ) {
            $hier[] = $lang;
        }

        $hier[] = is_rtl() ? 'rtl' : 'ltr';

        return apply_filters( 'hybrid/lang/hierarchy', $hier );
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\language' ) ) {
    /**
     * Gets the language for the currently-viewed page.  It strips the region from
     * the locale if needed and just returns the language code.
     *
     * @param string $locale
     * @return string
     */
    function language( $locale = '' ) {

        if ( ! $locale ) {
            $locale = is_admin() ? get_user_locale() : get_locale();
        }

        return sanitize_key( preg_replace( '/(.*?)_.*?$/i', '$1', $locale ) );
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\region' ) ) {
    /**
     * Gets the region for the currently viewed page.  It strips the language from
     * the locale if needed.  Note that not all locales will have a region, so this
     * might actually return the same thing as `language()`.
     *
     * @param string $locale
     * @return string
     */
    function region( $locale = '' ) {

        if ( ! $locale ) {
            $locale = is_admin() ? get_user_locale() : get_locale();
        }

        return sanitize_key( preg_replace( '/.*?_(.*?)$/i', '$1', $locale ) );
    }
}
