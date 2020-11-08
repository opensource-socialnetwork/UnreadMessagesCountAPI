<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
define('UnreadMessagesCountAPI', ossn_route()->com . 'UnreadMessagesCountAPI/');
function unread_messages_count_api() {
		ossn_add_hook('services', 'methods', 'unread_mesages_count_api_custom');
}
function unread_mesages_count_api_custom($hook, $type, $methods, $params) {
		$methods['v1.0'][] = 'unread_mesages_count_custom';
		return $methods;
}
ossn_register_callback('ossn', 'init', 'unread_messages_count_api');