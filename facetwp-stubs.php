<?php
/**
 * Generated stub declarations for FacetWP
 * @see https://facetwp.com/
 * @see https://github.com/php-stubs/facetwp-pro-stubs
 */

class FacetWP_API_Fetch
{
    function __construct()
    {
    }
    // PHP < 5.3
    function register()
    {
    }
    // PHP < 5.3
    function callback($request)
    {
    }
    // PHP < 5.3
    function permission_callback($request)
    {
    }
    function process_request($params = [])
    {
    }
}
class FacetWP_Ajax
{
    public $url_vars;
    public $query_vars;
    public $is_preload;
    function __construct()
    {
    }
    function switchboard()
    {
    }
    /**
     * Save admin settings
     */
    function save_settings()
    {
    }
    /**
     * Rebuild the index table
     */
    function rebuild_index()
    {
    }
    function get_info()
    {
    }
    /**
     * Return query arguments based on a Query Builder object
     */
    function get_query_args()
    {
    }
    /**
     * Keep track of indexing progress
     */
    function heartbeat()
    {
    }
    /**
     * License activation
     */
    function license()
    {
    }
    /**
     * Import / export functionality
     */
    function backup()
    {
    }
    /**
     * The AJAX facet refresh handler
     */
    function refresh()
    {
    }
    /**
     * Resume stalled indexer
     */
    function resume_index()
    {
    }
}
class FacetWP_Builder
{
    public $css = [];
    public $data = [];
    public $custom_css;
    function __construct()
    {
    }
    /**
     * Generate CSS class string (helper method)
     * @since 3.9.3
     */
    function get_classes($type, $settings)
    {
    }
    /**
     * Generate the layout HTML
     * @since 3.2.0
     */
    function render_layout($layout)
    {
    }
    /**
     * Generate the row HTML
     * @since 3.2.0
     */
    function render_row($row)
    {
    }
    /**
     * Generate the col HTML
     * @since 3.2.0
     */
    function render_col($col)
    {
    }
    /**
     * Generate the item HTML
     * @since 3.2.0
     */
    function render_item($item)
    {
    }
    /**
     * Parse dynamic tags, e.g. {{ first_name }}
     */
    function parse_dynamic_tags($output, $params)
    {
    }
    /**
     * Calculate some dynamic tag values on-the-fly, to prevent
     * unnecessary queries and extra load time
     */
    function dynamic_tag_value($tag_value, $tag_name, $params)
    {
    }
    /**
     * Build the redundant styles (border, padding,etc)
     * @since 3.2.0
     */
    function build_styles($settings)
    {
    }
    /**
     * Build the CSS widths, e.g. for "padding" or "border-width"
     * @since 3.2.0
     */
    function get_widths($data)
    {
    }
    /**
     * Convert a value into a link
     * @since 3.2.0
     */
    function linkify($value, $link_data, $term_data = [])
    {
    }
    /**
     * Turn the CSS array into valid CSS
     * @since 3.2.0
     */
    function render_css()
    {
    }
    /**
     * Filter out empty or invalid rules
     * @since 3.2.0
     */
    function get_valid_css_rules($props)
    {
    }
    /**
     * Optimize CSS rules
     * @since 3.2.0
     */
    function is_valid_css_rule($prop, $value)
    {
    }
    /**
     * Make sure the query is valid
     * @since 3.2.0
     */
    function parse_query_obj($query_obj)
    {
    }
    /**
     * Get necessary values for the layout builder
     * @since 3.2.0
     */
    function get_layout_data()
    {
    }
    /**
     * Get necessary data for the query builder
     * @since 3.0.0
     */
    function get_query_data()
    {
    }
    /**
     * Replace "date|" placeholders with actual dates
     */
    function hydrate_date_values($query_args)
    {
    }
    /**
     * Let users pull URI or GET params into the query builder
     * E.g. "http:uri", "http:uri:0", or "http:get:year"
     * @since 3.6.0
     */
    function parse_uri_tags($values)
    {
    }
}
class FacetWP_Diff
{
    /**
     * Compare "facetwp_settings" with "facetwp_settings_last_index" to determine
     * whether the user needs to rebuild the index
     * @since 3.0.9
     */
    function is_reindex_needed()
    {
    }
    function is_indexable($facet)
    {
    }
    /**
     * Get an array element
     * @since 3.0.9
     */
    function get_attr($name, $collection)
    {
    }
}
class FacetWP_Display
{
    /* (array) Facet types being used on the page */
    public $active_types = [];
    /* (array) Facets being used on the page */
    public $active_facets = [];
    /* (array) Extra features used on the page */
    public $active_extras = [];
    /* (array) Saved shortcode attributes */
    public $shortcode_atts = [];
    /* (boolean) Whether to enable FacetWP for the current page */
    public $load_assets = \false;
    /* (array) Scripts and stylesheets to enqueue */
    public $assets = [];
    /* (array) Data to pass to front-end JS */
    public $json = [];
    function __construct()
    {
    }
    /**
     * Detect the loop container if the "facetwp-template" class is missing
     */
    function add_template_tag($wp_query)
    {
    }
    /**
     * Set default values for atts
     *
     * Old: [facetwp template="foo" static]
     * New: [facetwp template="foo" static="true"]
     */
    function normalize_atts($atts)
    {
    }
    /**
     * Register shortcodes
     */
    function shortcode($atts)
    {
    }
    /**
     * Output facet scripts
     */
    function front_scripts()
    {
    }
}
final class FacetWP_Helper
{
    /* (array) The facetwp_settings option (after hooks) */
    public $settings;
    /* (array) Associative array of facet objects */
    public $facet_types;
    /* (array) Cached data sources */
    public $data_sources;
    /* (array) Cached terms */
    public $term_cache;
    function __construct()
    {
    }
    /**
     * Parse the URL hostname
     */
    function get_http_host()
    {
    }
    /**
     * Get the current page URI
     */
    function get_uri()
    {
    }
    /**
     * Get available facet types
     */
    function get_facet_types()
    {
    }
    /**
     * Get settings and allow for developer hooks
     */
    function load_settings($last_index = \false)
    {
    }
    /**
     * Get a general setting value
     *
     * @param string $name The setting name
     * @param mixed $default The default value
     * @since 1.9
     */
    function get_setting($name, $default = '')
    {
    }
    /**
     * Get an array of all facets
     * @return array
     */
    function get_facets()
    {
    }
    /**
     * Get an array of all templates
     * @return array
     */
    function get_templates()
    {
    }
    /**
     * Get all properties for a single facet
     * @param string $facet_name
     * @return mixed An array of facet info, or false
     */
    function get_facet_by_name($facet_name)
    {
    }
    /**
     * Get all properties for a single template
     *
     * @param string $template_name
     * @return mixed An array of template info, or false
     */
    function get_template_by_name($template_name)
    {
    }
    /**
     * Fetch facets using one of its settings
     * @param string $setting_name
     * @param mixed $setting_value
     * @return array
     */
    function get_facets_by($setting, $value)
    {
    }
    /**
     * Get terms across all languages (thanks, WPML)
     * @since 3.8.5
     */
    function get_terms($taxonomy)
    {
    }
    /**
     * Get an array of term information, including depth
     * @param string $taxonomy The taxonomy name
     * @return array Term information
     * @since 0.9.0
     */
    function get_term_depths($taxonomy)
    {
    }
    /**
     * Finish sorting the facet values
     * The results are already sorted by depth and (name OR count), we just need
     * to move the children directly below their parents
     */
    function sort_taxonomy_values($values = [], $orderby = 'count')
    {
    }
    /**
     * Sanitize SQL data
     * @return mixed The sanitized value(s)
     * @since 3.0.7
     */
    function sanitize($input)
    {
    }
    /**
     * Escape output data
     * @return mixed the escaped value(s)
     * @since 4.2.0
     */
    function escape($input)
    {
    }
    /**
     * Does an active facet with the specified setting exist?
     * @return boolean
     * @since 1.4.0
     */
    function facet_setting_exists($setting_name, $setting_value)
    {
    }
    /**
     * Does this facet have a setting with the specified value?
     * @return boolean
     * @since 2.3.4
     */
    function facet_is($facet, $setting_name, $setting_value)
    {
    }
    /**
     * Hash a facet value if needed
     * @return string
     * @since 2.1
     */
    function safe_value($value)
    {
    }
    /**
     * Properly format numbers, taking separators into account
     * @return number
     * @since 2.7.5
     */
    function format_number($num)
    {
    }
    /**
     * Get facet data sources
     * @return array
     * @since 2.2.1
     */
    function get_data_sources($context = 'default')
    {
    }
    /**
     * Sort facetwp_facet_sources by weight
     * @since 2.7.5
     */
    function sort_by_weight($a, $b)
    {
    }
    /**
     * Get row counts for all facets
     * @since 3.3.4
     */
    function get_row_counts()
    {
    }
    /**
     * Get indexable post types
     */
    function get_indexable_types()
    {
    }
    /**
     * Grab the license key
     * @since 3.0.3
     */
    function get_license_key()
    {
    }
    /**
     * Determine whether the license is active
     * @since 3.3.0
     */
    function is_license_active()
    {
    }
    /**
     * Get a license meta value
     * Possible keys: status, message, expiration, payment_id, price_id
     * @since 3.5.3
     */
    function get_license_meta($key = 'status')
    {
    }
}
class FacetWP_Indexer
{
    /* (boolean) wp_insert_post running? */
    public $is_saving = \false;
    /* (boolean) Whether to index a single post */
    public $index_all = \false;
    /* (int) Number of posts to index before updating progress */
    public $chunk_size = 10;
    /* (string) Whether a temporary table is active */
    public $table;
    /* (array) Facet properties for the value being indexed */
    public $facet;
    /* (array) Value modifiers set via the admin UI */
    public $modifiers;
    /* (bool) Whether indexing hooks are in use */
    public $is_overridden;
    function __construct()
    {
    }
    /**
     * Event listeners
     * @since 2.8.4
     */
    function run_hooks()
    {
    }
    /**
     * Cron task
     * @since 2.8.5
     */
    function run_cron()
    {
    }
    /**
     * Update the index when posts get saved
     * @since 0.1.0
     */
    function save_post($post_id)
    {
    }
    /**
     * Update the index when posts get deleted
     * @since 0.6.0
     */
    function delete_post($post_id)
    {
    }
    /**
     * Update the index when terms get saved
     * @since 0.6.0
     */
    function edit_term($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * Update the index when terms get deleted
     * @since 0.6.0
     */
    function delete_term($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * We're hijacking wp_insert_post_parent
     * Prevent our set_object_terms() hook from firing within wp_insert_post
     * @since 2.2.2
     */
    function is_wp_insert_post($post_parent)
    {
    }
    /**
     * Support for manual taxonomy associations
     * @since 0.8.0
     */
    function set_object_terms($object_id)
    {
    }
    /**
     * Rebuild the facet index
     * @param mixed $post_id The post ID (set to FALSE to re-index everything)
     */
    function index($post_id = \false)
    {
    }
    /**
     * Get the array of indexer query args
     * @since 4.1.8
     */
    function get_query_args($post_id = \false)
    {
    }
    /**
     * Get an array of post IDs to index
     * @since 3.6.8
     */
    function get_post_ids_to_index($post_id = \false)
    {
    }
    /**
     * Index an individual post
     * @since 3.6.8
     */
    function index_post($post_id, $facets)
    {
    }
    /**
     * Get data for a table row
     * @since 2.1.1
     */
    function get_row_data($defaults)
    {
    }
    /**
     * Index a facet value
     * @since 0.6.0
     */
    function index_row($params)
    {
    }
    /**
     * Save a facet value to DB
     * This can be trigged by "facetwp_index_row" to handle multiple values
     * @since 1.2.5
     */
    function insert($params)
    {
    }
    /**
     * Get the indexing completion percentage
     * @return mixed The decimal percentage, or -1
     * @since 0.1.0
     */
    function get_progress()
    {
    }
    /**
     * Get indexer transient variables
     * @since 1.7.8
     */
    function get_transient($name = \false)
    {
    }
    /**
     * Set either the index or temp table
     * @param string $table 'auto', 'index', or 'temp'
     * @since 4.1.4
     */
    function set_table($table = 'auto')
    {
    }
    /**
     * Index table management
     * @since 3.5
     */
    function manage_temp_table($action = 'create')
    {
    }
    /**
     * Populate an array of facet value modifiers (defined in the admin UI)
     * @since 3.5.6
     */
    function load_value_modifiers($facets)
    {
    }
}
class FacetWP_Init
{
    function __construct()
    {
    }
    /**
     * Initialize classes and WP hooks
     */
    function init()
    {
    }
    /**
     * i18n support
     */
    function load_textdomain()
    {
    }
    /**
     * Register the FacetWP settings page
     */
    function admin_menu()
    {
    }
    /**
     * Notify users to install necessary integrations
     */
    function admin_notices()
    {
    }
    /**
     * Enqueue jQuery
     */
    function front_scripts()
    {
    }
    /**
     * Route to the correct edit screen
     */
    function settings_page()
    {
    }
    /**
     * Prevent WP from redirecting FWP pager to /page/X
     */
    function redirect_canonical($redirect_url, $requested_url)
    {
    }
    /**
     * Add "Settings" link to plugin listing page
     */
    function plugin_action_links($links)
    {
    }
    /**
     * WooCommerce 3.6+ doesn't load its frontend includes for REST API requests
     * We need to force-load these includes for FacetWP refreshes
     * See includes() within class-woocommerce.php
     *
     * This code isn't within /integrations/woocommerce/ because it runs *before* init
     *
     * @since 3.3.10
     */
    function is_rest_api_request($request)
    {
    }
}
class FacetWP_Overrides
{
    public $raw;
    function __construct()
    {
    }
    /**
     * Indexer modifications
     */
    function index_row($params, $class)
    {
    }
    /**
     * Make sure that numbers are properly formatted
     */
    function format_numbers($params, $class)
    {
    }
    /**
     * Ignore certain post types
     */
    function ignore_post_types($is_main_query, $query)
    {
    }
}
class FacetWP_Renderer
{
    /* (array) Data for the current facets */
    public $facets;
    /* (array) Data for the current template */
    public $template;
    /* (array) WP_Query arguments */
    public $query_args;
    /* (array) WP_Query args when "facetwp_template_use_archive" is enabled */
    public $archive_args;
    /* (array) Data used to build the pager */
    public $pager_args;
    /* (string) MySQL WHERE clause passed to each facet */
    public $where_clause = '';
    /* (array) AJAX parameters passed in */
    public $ajax_params;
    /* (array) HTTP parameters from the original page (URI, GET) */
    public $http_params;
    /* (boolean) Is search active? */
    public $is_search = \false;
    /* (boolean) Are we preloading? */
    public $is_preload = \false;
    /* (array) Cache preloaded facet values */
    public $preloaded_values;
    /* (array) The final WP_Query object */
    public $query;
    /* (array) Convenience var */
    public $facet_types;
    function __construct()
    {
    }
    /**
     * Generate the facet output
     * @param array $params An array of arrays (see the FacetWP->refresh() method)
     * @return array
     */
    function render($params)
    {
    }
    /**
     * Get WP_Query arguments by executing the template "query" field
     * @return null
     */
    function get_query_args()
    {
    }
    /**
     * Get ALL post IDs for the matching query
     * @return array An array of post IDs
     */
    function get_filtered_post_ids($query_args = [])
    {
    }
    /**
     * Run the template display code
     * @return string (HTML)
     */
    function get_template_html()
    {
    }
    /**
     * Result count (1-10 of 234)
     * @param array $params An array with "page", "per_page", and "total_rows"
     * @return string
     */
    function get_result_count($params = [])
    {
    }
    /**
     * Pagination
     * @param array $params An array with "page", "per_page", and "total_rows"
     * @return string
     */
    function paginate($params = [])
    {
    }
    /**
     * "Per Page" dropdown box
     * @return string
     */
    function get_per_page_box()
    {
    }
    /**
     * Get debug info for the browser console
     * @since 3.5.7
     */
    function get_debug_info()
    {
    }
    /**
     * Display the location of relevant hooks (for Debug Mode)
     * @since 3.5.7
     */
    function get_hooks_used()
    {
    }
}
class FacetWP_Request
{
    /* (array) FacetWP-related GET variables */
    public $url_vars = [];
    /* (mixed) The main query vars */
    public $query_vars = \null;
    /* (boolean) FWP template shortcode? */
    public $is_shortcode = \false;
    /* (boolean) Is a FacetWP refresh? */
    public $is_refresh = \false;
    /* (boolean) Initial load? */
    public $is_preload = \false;
    /* (string) Name of active FacetWP template */
    public $template_name;
    /* (array) Response output */
    public $output;
    function __construct()
    {
    }
    /**
     * application/json requires processing the raw PHP input stream
     */
    function process_json()
    {
    }
    /**
     * If AJAX and the template is "wp", return the buffered HTML
     * Otherwise, store the GET variables for later use
     */
    function intercept_request()
    {
    }
    /**
     * FacetWP runs the archive query before WP gets the chance.
     * This hook prevents the query from running twice, by letting us inject the
     * first query's posts (and counts) into the "main" query.
     */
    function maybe_abort_query($posts, $query)
    {
    }
    /**
     * Fixes https://core.trac.wordpress.org/ticket/40393
     */
    function sacrificial_lamb($query)
    {
    }
    /**
     * Force FacetWP to use the default WP query
     */
    function update_query_vars($query)
    {
    }
    /**
     * Is this the main query?
     */
    function is_main_query($query)
    {
    }
    /**
     * Process the AJAX $_POST data
     * This gets passed into FWP()->facet->render()
     */
    function process_post_data()
    {
    }
    /**
     * On initial pageload, preload the data
     *
     * This gets called twice; once in the template shortcode (to grab only the template)
     * and again in FWP()->display->front_scripts() to grab everything else.
     *
     * Two calls are needed for timing purposes; the template shortcode often renders
     * before some or all of the other FacetWP-related shortcodes.
     */
    function process_preload_data($template_name = \false, $overrides = [])
    {
    }
    /**
     * This gets called from FWP()->display->front_scripts(), when we finally
     * know which shortcodes are on the page.
     *
     * Since we already got the template HTML on the first process_preload_data() call,
     * this time we're grabbing everything but the template.
     *
     * The return value of this method gets passed into the 2nd argument of
     * process_preload_data().
     */
    function process_preload_overrides($items)
    {
    }
    /**
     * Inject the page HTML into the JSON response
     * We'll cherry-pick the content from the HTML using front.js
     */
    function inject_template()
    {
    }
}
class FacetWP_Settings
{
    /**
     * Get the field settings array
     * @since 3.0.0
     */
    function get_registered_settings()
    {
    }
    /**
     * All facet admin fields
     * @since 3.9
     */
    function get_registered_facet_fields()
    {
    }
    /**
     * Return HTML for a single facet field (supports aliases)
     * @since 3.9
     */
    function get_facet_field_html($name)
    {
    }
    /**
     * Render a facet field
     * @since 3.9
     */
    function render_facet_field($field)
    {
    }
    /**
     * Return HTML for a setting field
     * @since 3.0.0
     */
    function get_setting_html($setting_name, $field_type = 'text', $atts = [])
    {
    }
    /**
     * Get an array of all facets and templates
     * @since 3.0.0
     */
    function get_export_choices()
    {
    }
    /**
     * Get the activation status
     * @since 3.0.0
     */
    function get_activation_status()
    {
    }
    /**
     * Load i18n admin strings
     * @since 3.2.0
     */
    function get_i18n_strings()
    {
    }
    /**
     * Get available image sizes
     * @since 3.2.7
     */
    function get_image_sizes()
    {
    }
    /**
     * Return an array of formatted image sizes
     * @since 3.2.7
     */
    function get_image_size_labels()
    {
    }
    /**
     * Create SVG images (based on Font Awesome)
     * @license https://fontawesome.com/license/free CC BY 4.0
     * @since 3.6.5
     */
    function get_svg()
    {
    }
}
class FacetWP_Updater
{
    function __construct()
    {
    }
    /**
     * Get info for FacetWP and its add-ons
     */
    function get_plugins_to_check()
    {
    }
    /**
     * Handle the "View Details" popup
     *
     * $args->slug = "facetwp-flyout"
     * plugin_path = "facetwp-flyout/facetwp-flyout.php"
     */
    function plugins_api($result, $action, $args)
    {
    }
    /**
     * Grab (and cache) plugin update data
     */
    function check_update($transient)
    {
    }
    /**
     * Display a license reminder on the plugin list screen
     */
    function in_plugin_update_message($plugin_data, $response)
    {
    }
}
class FacetWP_Upgrade
{
    public $version;
    public $last_version;
    function __construct()
    {
    }
}
class FacetWP_Facet
{
    public $label;
    public $fields = [];
    /**
     * Grab the orderby, as needed by several facet types
     * @since 3.0.4
     */
    function get_orderby($facet)
    {
    }
    /**
     * Grab the limit, and support -1
     * @since 3.5.4
     */
    function get_limit($facet, $default = 10, $field = 'count')
    {
    }
    /**
     * Adjust the $where_clause for facets in "OR" mode
     *
     * FWP()->or_values contains EVERY facet and their matching post IDs
     * FWP()->unfiltered_post_ids contains original post IDs
     *
     * @since 3.2.0
     */
    function get_where_clause($facet)
    {
    }
    /**
     * Render some commonly used admin settings
     * @since 3.5.6
     * @deprecated 3.9
     */
    function render_setting($name)
    {
    }
}
class FacetWP_Facet_Autocomplete extends \FacetWP_Facet
{
    public $is_buffering = \false;
    public $limit;
    function __construct()
    {
    }
    /**
     * For page templates with a custom WP_Query, we need to prevent the
     * page header from being output with the autocomplete JSON
     */
    function maybe_buffer_output()
    {
    }
    /**
     * For CSS-based templates, the "facetwp_autocomplete_load" action isn't fired
     * so we need to manually check the action
     */
    function template_handler()
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
    /**
     * Output any front-end scripts
     */
    function front_scripts()
    {
    }
    /**
     * Load facet values via AJAX
     */
    function ajax_load()
    {
    }
    /**
     * (Front-end) Attach settings to the AJAX response
     */
    function settings_js($params)
    {
    }
}
class FacetWP_Facet_Checkboxes extends \FacetWP_Facet
{
    function __construct()
    {
    }
    /**
     * Load the available choices
     */
    function load_values($params)
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Generate the facet HTML (hierarchical taxonomies)
     */
    function render_hierarchy($params)
    {
    }
    /**
     * Render a single facet choice
     */
    function render_choice($row, $params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
    /**
     * Output any front-end scripts
     */
    function front_scripts()
    {
    }
    /**
     * (Front-end) Attach settings to the AJAX response
     */
    function settings_js($params)
    {
    }
}
class FacetWP_Facet_Date_Range extends \FacetWP_Facet
{
    function __construct()
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
    /**
     * Output any front-end scripts
     */
    function front_scripts()
    {
    }
    function register_fields()
    {
    }
    /**
     * (Front-end) Attach settings to the AJAX response
     */
    function settings_js($params)
    {
    }
    function get_i18n_labels()
    {
    }
}
class FacetWP_Facet_Dropdown extends \FacetWP_Facet
{
    function __construct()
    {
    }
    /**
     * Load the available choices
     */
    function load_values($params)
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
}
class FacetWP_Facet_fSelect extends \FacetWP_Facet
{
    function __construct()
    {
    }
    /**
     * Load the available choices
     */
    function load_values($params)
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
    /**
     * (Front-end) Attach settings to the AJAX response
     */
    function settings_js($params)
    {
    }
    /**
     * Output any front-end scripts
     */
    function front_scripts()
    {
    }
}
class FacetWP_Facet_Hierarchy extends \FacetWP_Facet
{
    function __construct()
    {
    }
    /**
     * Load the available choices
     */
    function load_values($params)
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
}
class FacetWP_Facet_Number_Range extends \FacetWP_Facet
{
    function __construct()
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
    function register_fields()
    {
    }
    /**
     * (Front-end) Attach settings to the AJAX response
     */
    function settings_js($params)
    {
    }
}
class FacetWP_Facet_Pager extends \FacetWP_Facet
{
    public $pager_args;
    function __construct()
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    function render_numbers($facet)
    {
    }
    function render_page($page, $label = \false, $extra_class = \false)
    {
    }
    function render_counts($facet)
    {
    }
    function render_load_more($facet)
    {
    }
    function render_per_page($facet)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
    /**
     * (Front-end) Attach settings to the AJAX response
     */
    function settings_js($params)
    {
    }
    function register_fields()
    {
    }
}
class FacetWP_Facet_Proximity_Core extends \FacetWP_Facet
{
    /* (array) Associative array containing post_id => distance */
    public $distance = [];
    /* (array) Associative array containing post_id => [lat, lng] */
    public $post_latlng = [];
    function __construct()
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
    /**
     * Output front-end scripts
     */
    function front_scripts()
    {
    }
    function register_fields()
    {
    }
    /**
     * Index the coordinates
     * We expect a comma-separated "latitude, longitude"
     */
    function index_latlng($params, $class)
    {
    }
    /**
     * Add "Distance" to the sort box
     */
    function sort_options($options, $params)
    {
    }
    /**
     * Sort the final (filtered) post IDs by distance
     */
    function sort_by_distance($post_ids, $class)
    {
    }
}
class FacetWP_Facet_Radio_Core extends \FacetWP_Facet
{
    function __construct()
    {
    }
    /**
     * Load the available choices
     */
    function load_values($params)
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
}
class FacetWP_Facet_Rating extends \FacetWP_Facet
{
    function __construct()
    {
    }
    /**
     * Load the available choices
     */
    function load_values($params)
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
    function register_fields()
    {
    }
    /**
     * Output front-end scripts
     */
    function front_scripts()
    {
    }
}
class FacetWP_Facet_Reset extends \FacetWP_Facet
{
    function __construct()
    {
    }
    function render($params)
    {
    }
    function filter_posts($params)
    {
    }
    function register_fields()
    {
    }
}
class FacetWP_Facet_Search extends \FacetWP_Facet
{
    public $field_defaults;
    function __construct()
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
    function register_fields()
    {
    }
    /**
     * (Front-end) Attach settings to the AJAX response
     */
    function settings_js($params)
    {
    }
}
class FacetWP_Facet_Slider extends \FacetWP_Facet
{
    function __construct()
    {
    }
    /**
     * Generate the facet HTML
     */
    function render($params)
    {
    }
    /**
     * Filter the query based on selected values
     */
    function filter_posts($params)
    {
    }
    /**
     * (Front-end) Attach settings to the AJAX response
     */
    function settings_js($params)
    {
    }
    /**
     * Prevent the slider HTML from refreshing when active
     * @since 3.8.11
     */
    function maybe_prevent_facet_html($output, $params)
    {
    }
    /**
     * Output any front-end scripts
     */
    function front_scripts()
    {
    }
    function register_fields()
    {
    }
}
class FacetWP_Facet_Sort extends \FacetWP_Facet
{
    public $sort_options = [];
    function __construct()
    {
    }
    /**
     * Render the sort facet
     */
    function render($params)
    {
    }
    /**
     * Sort facets don't narrow results
     */
    function filter_posts($params)
    {
    }
    /**
     * Register admin settings
     */
    function register_fields()
    {
    }
    /**
     * Convert a sort facet's sort options into WP_Query arguments
     * @since 4.0.8
     */
    function parse_sort_facet($facet)
    {
    }
    /**
     * Handle both sort facets and the (old) sort feature
     * @since 4.0.6
     */
    function apply_sort($query_args, $class)
    {
    }
    /**
     * Generate choices for the (old) sort feature
     * @since 4.0.6
     */
    function get_sort_options()
    {
    }
    /**
     * Render the (old) sort feature
     * @since 4.0.6
     */
    function render_sort_feature($output, $params)
    {
    }
}
class FacetWP_Integration_ACF
{
    public $fields = [];
    public $parent_type_lookup = [];
    public $repeater_row;
    function __construct()
    {
    }
    /**
     * Add ACF fields to the Data Sources dropdown
     */
    function facet_sources($sources)
    {
    }
    /**
     * If the facet "Sort by" value is "Term order", then preserve
     * the custom order of certain ACF fields (checkboxes, radio, etc.)
     */
    function facet_orderby($orderby, $facet)
    {
    }
    /**
     * Index ACF field data
     */
    function index_acf_values($return, $params)
    {
    }
    /**
     * Hijack the "facetwp_indexer_query_args" hook to lookup the fields once
     */
    function lookup_acf_fields($args)
    {
    }
    /**
     * Grab all ACF fields
     */
    function get_fields()
    {
    }
    /**
     * We need to get field groups in ALL languages
     */
    function disable_wpml($query)
    {
    }
    /**
     * Extract field values from the repeater array
     */
    function process_field_value($value, $hierarchy, $parent_field_key)
    {
    }
    /**
     * Get an array of $params arrays
     * Useful for indexing and grabbing values for the Layout Builder
     * @since 3.4.0
     */
    function get_values_to_index($value, $field, $params)
    {
    }
    /**
     * Index values
     */
    function index_field_values($rows)
    {
    }
    /**
     * Handle "source_other" setting
     */
    function index_source_other($value, $params)
    {
    }
    /**
     * Format dates in YYYY-MM-DD
     */
    function format_date($str)
    {
    }
    /**
     * Generates a flat array of fields within a specific field group
     */
    function flatten_fields($fields, $field_group, $hierarchy = '', $parents = '')
    {
    }
    /**
     * Get the field value (support User Post Type)
     * @since 3.4.1
     */
    function get_field($source, $post_id)
    {
    }
    /**
     * Fallback values for the layout builder
     * @since 3.4.0
     * 
     * ACF return formats:
     * [image, file] = array, url, id
     * [select, checkbox, radio, button_group] = value, label, array (both)
     * [post_object, relationship, taxonomy] = object, id
     * [user] = array, object, id
     * [link] = array, url
     */
    function layout_builder_values($value, $item)
    {
    }
}
class FacetWP_Integration_EDD
{
    function __construct()
    {
    }
    /**
     * Trigger some EDD code on facetwp-loaded
     * @since 2.0.4
     */
    function assets($assets)
    {
    }
    /**
     * Help FacetWP auto-detect the [downloads] shortcode
     * @since 2.0.4
     */
    function edd_downloads_query($query)
    {
    }
    /**
     * Exclude specific EDD custom fields
     * @since 2.4
     */
    function exclude_data_sources($sources)
    {
    }
}
class FacetWP_Integration_SearchWP
{
    public $keywords;
    public $swp_query;
    public $first_run = \true;
    function __construct()
    {
    }
    /**
     * Run and cache the \SWP_Query
     */
    function is_main_query($is_main_query, $query)
    {
    }
    /**
     * Whitelist supported SWP_Query arguments
     *
     * @link https://searchwp.com/documentation/classes/swp_query/#arguments
     */
    function get_valid_args($query)
    {
    }
    /**
     * Modify FacetWP's render() query to use SearchWP's results while bypassing
     * WP core search. We're using this additional query to support custom query
     * modifications, such as for FacetWP's sort box.
     *
     * The hook priority (1000) is important because this needs to run after
     * FacetWP_Request->update_query_vars()
     */
    function pre_get_posts($query)
    {
    }
    /**
     * If [facetwp => false] then it's the get_filtered_post_ids() query. Return
     * the raw SearchWP results to prevent the additional query.
     *
     * If [facetwp => true] and [first_run => true] then it's the main WP query. Return
     * a non-null value to kill the query, since we don't use the results.
     *
     * If [facetwp => true] and [first_run => false] then it's the FacetWP render() query.
     */
    function posts_pre_query($posts, $query)
    {
    }
    /**
     * Apply highlighting if available
     */
    function posts_results($posts, $query)
    {
    }
    /**
     * For search facets, run \SWP_Query and return matching post IDs
     */
    function search_facet($return, $params)
    {
    }
    /**
     * Run a search and return the \SWP_Query object
     */
    function run_query($args)
    {
    }
    /**
     * Add engines to the search facet
     */
    function search_engines($engines)
    {
    }
    /**
     * Short-circuit SearchWP when "s" is empty and a search facet is in use
     * @since 4.2.6
     */
    function short_circuit($bool, $query)
    {
    }
}
class FacetWP_Integration_WooCommerce_Taxonomy
{
    function __construct()
    {
    }
    /**
     * Support category listings (Shop page display: Show categories)
     * @since 3.3.10
     */
    function add_loop_tag($template_name)
    {
    }
    /**
     * Adjust the category listing counts when facets are selected
     * @since 3.3.10
     */
    function adjust_term_counts($terms, $taxonomy, $query_vars)
    {
    }
    /**
     * Append facet URL variables to the category archive links
     * @since 3.3.10
     */
    function append_url_vars($term_link, $term, $taxonomy)
    {
    }
}
class FacetWP_Integration_WooCommerce
{
    public $cache = [];
    public $lookup = [];
    public $storage = [];
    public $variations = [];
    public $post_clauses = \false;
    function __construct()
    {
    }
    /**
     * Run WooCommerce handlers on facetwp-refresh
     * @since 2.0.9
     */
    function assets($assets)
    {
    }
    /**
     * Add WooCommerce-specific data sources
     * @since 2.1.4
     */
    function facet_sources($sources)
    {
    }
    /**
     * Attributes for WC product variations are stored in postmeta
     * @since 2.7.2
     */
    function force_taxonomy($defaults, $params)
    {
    }
    /**
     * Index product variations
     * @since 2.7
     */
    function index_variations($args)
    {
    }
    /**
     * When indexing product variations, attribute its parent product
     * @since 2.7
     */
    function attribute_variations($params)
    {
    }
    /**
     * Hijack filter_posts() to grab variation IDs
     * @since 2.7
     */
    function wpdb_sql($sql, $facet)
    {
    }
    /**
     * Store a facet's variation IDs
     * @since 2.7
     */
    function wpdb_get_col($result, $sql, $facet)
    {
    }
    /**
     * We need lookup arrays for both products and variations
     * @since 2.7.1
     */
    function generate_lookup_array($post_ids)
    {
    }
    /**
     * Determine valid variation IDs
     * @since 2.7
     */
    function process_variations($post_ids)
    {
    }
    /**
     * Calculate variation IDs
     * @param mixed $facet_name Facet name to ignore, or FALSE
     * @return array Associative array of product IDs + variation IDs
     * @since 2.8
     */
    function calculate_variations($facet_name = \false)
    {
    }
    /**
     * Apply variation IDs to load_values() method
     * @since 2.7
     */
    function facet_where($where_clause, $facet)
    {
    }
    /**
     * Efficiently grab the product type without wc_get_product()
     * @since 3.3.8
     */
    function get_product_type($post_id)
    {
    }
    /**
     * Index WooCommerce-specific values
     * @since 2.1.4
     */
    function index_woo_values($return, $params)
    {
    }
    /**
     * Exclude specific WC custom fields
     * @since 4.2.3
     */
    function exclude_data_sources($sources)
    {
    }
    /**
     * Allow certain hard-coded choices to be translated dynamically
     * instead of stored as translated in the index table
     * @since 3.9.6
     */
    function translate_hardcoded_choices($label, $params)
    {
    }
    /**
     * WooCommerce removes its sort hooks after the main product_query runs
     * We need to preserve the sort for FacetWP to work
     *
     * @since 3.2.8
     */
    function preserve_sort($clauses, $query)
    {
    }
    /**
     * Prevent WooCommerce from redirecting to single result page
     * @since 3.3.7
     */
    function redirect_single_search_result($bool)
    {
    }
    /**
     * Prevent WooCommerce sort when a FacetWP sort is active
     * @since 3.6.8
     */
    function default_catalog_orderby($orderby)
    {
    }
}
/**
 * Builds or purges the FacetWP index.
 */
class FacetWP_Integration_WP_CLI
{
    /**
     * Index facet data.
     * 
     * ## OPTIONS
     * 
     * [--ids=<ids>]
     * : Index specific post IDs (comma-separated).
     * 
     * [--facets=<facets>]
     * : Index specific facet names (comma-separated).
     */
    function index($args, $assoc_args)
    {
    }
    /**
     * Purge facet data.
     * 
     * ## OPTIONS
     * 
     * [--ids=<ids>]
     * : Purge specific post IDs (comma-separated).
     * 
     * [--facets=<facets>]
     * : Purge specific facet names (comma-separated).
     */
    function purge($args, $assoc_args)
    {
    }
}
class FacetWP_Integration_WP_Rocket
{
    function __construct()
    {
    }
    function get_exclusions($excluded)
    {
    }
}
class FacetWP
{
    public $filtered_post_ids;
    public $unfiltered_post_ids;
    public $is_filtered;
    public $is_modified;
    public $or_values;
    public $init;
    public $api;
    public $helper;
    public $facet;
    public $settings;
    public $diff;
    public $indexer;
    public $display;
    public $builder;
    public $request;
    public $ajax;
    public $acf;
    function __construct()
    {
    }
    /**
     * Singleton
     */
    public static function instance()
    {
    }
    /**
     * Require PHP 7.0+
     */
    function upgrade_notice()
    {
    }
}
function facetwp_api_refresh($request)
{
}
/**
 * Get a post's distance
 */
function facetwp_get_distance($post_id = \false)
{
}
// DO NOT MODIFY THIS FILE!
// Use your theme's functions.php instead
/**
 * An alternate to using do_shortcode()
 * 
 * facetwp_display( 'pager' );
 * facetwp_display( 'template', 'cars' );
 * facetwp_display( 'template', 'cars', [ 'static' => true ] );
 * 
 * @since 1.7.5
 */
function facetwp_display()
{
}
/**
 * Allow for translation of dynamic strings
 * @since 2.1
 */
function facetwp_i18n($string)
{
}
/**
 * Support SQL modifications
 * @since 2.7
 */
function facetwp_sql($sql, $facet)
{
}
function FWP()
{
}