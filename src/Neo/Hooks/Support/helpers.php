<?php

use Neo\Hooks\Hook;

if ( ! function_exists('add_filter'))
{
	/**
	 * add_filter Hooks a function or method to a specific filter action.
	 * @param string $tag The name of the filter to hook the $function_to_add to.
	 * @param callback $function_to_add The name of the function to be called when the filter is applied.
	 * @param int $priority optional. Used to specify the order in which the functions associated with a particular action are executed (default: 10). Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action.
	 * @param int $accepted_args optional. The number of arguments the function accept (default 1).
	 * @return boolean true
	 */
	function add_filter($tag, $function_to_add, $priority = 10, $accepted_args = 1)
	{
		return Hook::instance()->add_filter($tag, $function_to_add, $priority, $accepted_args);
	}
}

if ( ! function_exists('remove_filter'))
{
	/**
	 * remove_filter Removes a function from a specified filter hook.
	 * @param string $tag The filter hook to which the function to be removed is hooked.
	 * @param callback $function_to_remove The name of the function which should be removed.
	 * @param int $priority optional. The priority of the function (default: 10).
	 * @param int $accepted_args optional. The number of arguments the function accepts (default: 1).
	 * @return boolean Whether the function existed before it was removed.
	 */
	function remove_filter($tag, $function_to_remove, $priority = 10)
	{
		return Hook::instance()->remove_filter($tag, $function_to_remove, $priority);
	}
}

if ( ! function_exists('remove_all_filters'))
{
	/**
	 * remove_all_filters Remove all of the hooks from a filter.
	 * @param string $tag The filter to remove hooks from.
	 * @param int $priority The priority number to remove.
	 * @return bool True when finished.
	 */
	function remove_all_filters($tag, $priority = false)
	{
		return Hook::instance()->remove_all_filters($tag, $priority);
	}
}

if ( ! function_exists('has_filter'))
{
	/**
	 * has_filter  Check if any filter has been registered for a hook.
	 * @param string $tag The name of the filter hook.
	 * @param callback $function_to_check optional.
	 * @return mixed If $function_to_check is omitted, returns boolean for whether the hook has anything registered.
	 *   When checking a specific function, the priority of that hook is returned, or false if the function is not attached.
	 *   When using the $function_to_check argument, this function may return a non-boolean value that evaluates to false
	 *   (e.g.) 0, so use the === operator for testing the return value.
	 */
	function has_filter($tag, $function_to_check = false)
	{
		return Hook::instance()->has_filter($tag, $function_to_check);
	}
}

if ( ! function_exists('apply_filters'))
{
	/**
	 * apply_filters Call the functions added to a filter hook.
	 * @param string $tag The name of the filter hook.
	 * @param mixed $value The value on which the filters hooked to <tt>$tag</tt> are applied on.
	 * @param mixed $var,... Additional variables passed to the functions hooked to <tt>$tag</tt>.
	 * @return mixed The filtered value after all hooked functions are applied to it.
	 */
	function apply_filters($tag, $value)
	{
		return Hook::instance()->apply_filters($tag, $value);
	}
}

if ( ! function_exists('apply_filters_ref_array'))
{
	/**
	 * apply_filters_ref_array Execute functions hooked on a specific filter hook, specifying arguments in an array.
	 * @param string $tag The name of the filter hook.
	 * @param array $args The arguments supplied to the functions hooked to <tt>$tag</tt>
	 * @return mixed The filtered value after all hooked functions are applied to it.
	 */
	function apply_filters_ref_array($tag, $args)
	{
		return Hook::instance()->apply_filters_ref_array($tag, $args);
	}
}

if ( ! function_exists('add_action'))
{
	/**
	 * add_action Hooks a function on to a specific action.
	 * @access public
	 * @since 0.1
	 * @param string $tag The name of the action to which the $function_to_add is hooked.
	 * @param callback $function_to_add The name of the function you wish to be called.
	 * @param int $priority optional. Used to specify the order in which the functions associated with a particular action are executed (default: 10). Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action.
	 * @param int $accepted_args optional. The number of arguments the function accept (default 1).
	 */
	function add_action($tag, $function_to_add, $priority = 10, $accepted_args = 1)
	{
		return Hook::instance()->add_action($tag, $function_to_add, $priority, $accepted_args);
	}
}

if ( ! function_exists('has_action'))
{
	/**
	 * has_action Check if any action has been registered for a hook.
	 * @access public
	 * @since 0.1
	 * @param string $tag The name of the action hook.
	 * @param callback $function_to_check optional.
	 * @return mixed If $function_to_check is omitted, returns boolean for whether the hook has anything registered.
	 *   When checking a specific function, the priority of that hook is returned, or false if the function is not attached.
	 *   When using the $function_to_check argument, this function may return a non-boolean value that evaluates to false
	 *   (e.g.) 0, so use the === operator for testing the return value.
	 */
	function has_action($tag, $function_to_check = false)
	{
		return Hook::instance()->has_action($tag, $function_to_check);
	}
}

if ( ! function_exists('remove_action'))
{
	/**
	 * remove_action Removes a function from a specified action hook.
	 * @access public
	 * @since 0.1
	 * @param string $tag The action hook to which the function to be removed is hooked.
	 * @param callback $function_to_remove The name of the function which should be removed.
	 * @param int $priority optional The priority of the function (default: 10).
	 * @return boolean Whether the function is removed.
	 */
	function remove_action($tag, $function_to_remove, $priority = 10)
	{
		return Hook::instance()->remove_action($tag, $function_to_remove, $priority);
	}
}

if ( ! function_exists('remove_all_actions'))
{
	/**
	 * remove_all_actions Remove all of the hooks from an action.
	 * @access public
	 * @since 0.1
	 * @param string $tag The action to remove hooks from.
	 * @param int $priority The priority number to remove them from.
	 * @return bool True when finished.
	 */
	function remove_all_actions($tag, $priority = false)
	{
		return Hook::instance()->remove_all_actions($tag, $priority);
	}
}

if ( ! function_exists('do_action'))
{
	/**
	 * do_action Execute functions hooked on a specific action hook.
	 * @access public
	 * @since 0.1
	 * @param string $tag The name of the action to be executed.
	 * @param mixed $arg,... Optional additional arguments which are passed on to the functions hooked to the action.
	 * @return null Will return null if $tag does not exist in $filter array
	 */
	function do_action($tag, $arg = '')
	{
		return Hook::instance()->do_action($tag, $arg);
	}
}

if ( ! function_exists('do_action_ref_array'))
{
	/**
     * do_action_ref_array Execute functions hooked on a specific action hook, specifying arguments in an array.
     * @param string $tag The name of the action to be executed.
     * @param array $args The arguments supplied to the functions hooked to <tt>$tag</tt>
     * @return null Will return null if $tag does not exist in $filter array
     */
    function do_action_ref_array($tag, $args)
    {
    	return Hook::instance()->do_action_ref_array($tag, $args);
    }
}

if ( ! function_exists('did_action'))
{
	/**
     * did_action Retrieve the number of times an action is fired.
     * @param string $tag The name of the action hook.
      * @return int The number of times action hook <tt>$tag</tt> is fired
     */
    function did_action($tag)
    {
    	return Hook::instance()->did_action($tag);
    }
}