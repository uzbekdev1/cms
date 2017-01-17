<?php
/**
 * Config - the Global Configuration loaded BEFORE the Nova Application starts.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */

use Nova\Config\Config;

/**
 * PREFER to be used in Database calls or storing Session data, default is 'nova_'
 */
define('PREFIX', 'nova_');

/**
 * Setup the Config API Mode.
 * For using the 'database' mode, you need to have a database, with a table generated by 'scripts/nova_options'
 */
define('CONFIG_STORE', 'database'); // Supported: "files", "database"

/**
 * Wheter or not the configuration items are cached, while on Database Mode.
 */
define('CONFIG_CACHE', true);


/**
 * Routing configuration
 */
Config::set('routing', array(
    /*
     * The Asset Files Serving configuration.
     */
    'assets' => array(
        // The driver type used for serving the Asset Files.
        'driver' => 'default',                                  // Supported: "default", "custom".

        // The Assets Dispatcher used while the driver is on 'custom' mode.
        'dispatcher' => 'Shared\Routing\Assets\CustomDispatcher',

        // Wheter or not the CSS and JS files are automatically compressed.
        'compress' => false,

        // The browser Cache Control options.
        'cache' => array(
            'ttl'          => 600,
            'maxAge'       => 10800,
            'sharedMaxAge' => 600,
        ),

        // The Valid Vendor Paths - be aware that improper configuration of the Valid Vendor Paths could introduce
        // severe security issues, try to limit the access to a precise area, where aren't present "unsafe" files.
        //
        // '/vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css'
        //          ^____________________^____^____________________Those are the parts of path which are validated.
        //
        'paths' => array(
            'almasaeed2010/adminlte' => array(
                'bootstrap',
                'dist',
                'plugins'
            ),
            'twbs/bootstrap' => 'dist',
        ),
    ),
));