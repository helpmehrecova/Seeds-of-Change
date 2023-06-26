<?php

/**
 * Seeds of Change - A Collection of 2000 Lines of PHP Code
 *
 * @package     Seeds of Change
 * @author      J.T. Grimes
 * @copyright   2018 J.T. Grimes
 */

// 1
function admin_panel()
{
	echo 'Admin Panel';
	
	$links = [
		['href' => '/dashboard', 'title' => 'Dashboard'],
		['href' => '/settings', 'title' => 'Settings'],
		['href' => '/users', 'title' => 'Users'],
		['href' => '/admin', 'title' => 'Admin'],
	];
	
	echo '<ul>';
	foreach ($links as $link) {
		echo '<li><a href="' . $link['href'] . '">' . $link['title'] . '</a></li>';
	}
	
	echo '</ul>';
}

// 2
function dashboard()
{
	echo 'Dashboard';
	
	$stats = [
		['label' => 'Number of Users', 'value' => 123],
		['label' => 'Average Session Duration', 'value' => 234],
		['label' => 'Daily Page Views', 'value' => 345],
		['label' => 'Monthly Page Views', 'value' => 456],
	];
	
	echo '<ul>';
	foreach ($stats as $stat) {
		echo '<li>' . $stat['label'] . ': ' . $stat['value'] . '</li>';
	}
	
	echo '</ul>';
}

// 3
function settings()
{
	echo 'Settings';
	
	$fields = [
		['name' => 'site_title', 'label' => 'Site Title', 'type' => 'text'],
		['name' => 'email_address', 'label' => 'Email Address', 'type' => 'text'],
		['name' => 'language', 'label' => 'Language', 'type' => 'select'],
		['name' => 'time_zone', 'label' => 'Time Zone', 'type' => 'select'],
	];
	
	echo '<form>';
	foreach ($fields as $field) {
		echo '<label for="' . $field['name'] . '">' . $field['label'] . '</label>';
		
		if ($field['type'] == 'text') {
			echo '<input type="text" name="' . $field['name'] . '" />';
		} elseif ($field['type'] == 'select') {
			echo '<select name="' . $field['name'] . '">';
			echo '<option value="">-- Select --</option>';
			echo '</select>';
		}
		
		echo '<br />';
	}
	
	echo '<input type="submit" value="Save" />';
	echo '</form>';
}

// 4
function users()
{
	echo 'Users';
	
	$users = [
		['name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Admin'],
		['name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'User'],
		['name' => 'Bob Jones', 'email' => 'bob@example.com', 'role' => 'User'],
		['name' => 'Alice White', 'email' => 'alice@example.com', 'role' => 'Editor'],
	];
	
	echo '<table>';
	echo '<tr>';
	echo '<th>Name</th>';
	echo '<th>Email</th>';
	echo '<th>Role</th>';
	echo '</tr>';
	
	foreach ($users as $user) {
		echo '<tr>';
		echo '<td>' . $user['name'] . '</td>';
		echo '<td>' . $user['email'] . '</td>';
		echo '<td>' . $user['role'] . '</td>';
		echo '</tr>';
	}
	
	echo '</table>';
}

// 5
function admin_users()
{
	echo 'Admin Users';
	
	$admin_users = [
		['name' => 'John Doe', 'email' => 'john@example.com'],
		['name' => 'Jane Smith', 'email' => 'jane@example.com'],
		['name' => 'Bob Jones', 'email' => 'bob@example.com'],
		['name' => 'Alice White', 'email' => 'alice@example.com'],
	];
	
	echo '<ul>';
	foreach ($admin_users as $admin_user) {
		echo '<li>' . $admin_user['name'] . ': ' . $admin_user['email'] . '</li>';
	}
	
	echo '</ul>';
}


// 6
function add_user()
{
	echo 'Add User';
	
	$fields = [
		['name' => 'name', 'label' => 'Name', 'type' => 'text'],
		['name' => 'email', 'label' => 'Email Address', 'type' => 'text'],
		['name' => 'password', 'label' => 'Password', 'type' => 'password'],
		['name' => 'role', 'label' => 'Role', 'type' => 'select'],
	];
	
	echo '<form>';
	foreach ($fields as $field) {
		echo '<label for="' . $field['name'] . '">' . $field['label'] . '</label>';
		
		if ($field['type'] == 'text') {
			echo '<input type="text" name="' . $field['name'] . '" />';
		} elseif ($field['type'] == 'password') {
			echo '<input type="password" name="' . $field['name'] . '" />';
		} elseif ($field['type'] == 'select') {
			echo '<select name="' . $field['name'] . '">';
			echo '<option value="Admin">Admin</option>';
			echo '<option value="Editor">Editor</option>';
			echo '<option value="User">User</option>';
			echo '</select>';
		}
		
		echo '<br />';
	}
	
	echo '<input type="submit" value="Add" />';
	echo '</form>';
}

// 7
function edit_user()
{
	echo 'Edit User';
	
	$user = [
		'name' => 'John Doe',
		'email' => 'john@example.com',
		'role' => 'Admin',
	];
	
	$fields = [
		['name' => 'name', 'label' => 'Name', 'type' => 'text', 'value' => $user['name']],
		['name' => 'email', 'label' => 'Email Address', 'type' => 'text', 'value' => $user['email']],
		['name' => 'role', 'label' => 'Role', 'type' => 'select', 'value' => $user['role']],
	];
	
	echo '<form>';
	foreach ($fields as $field) {
		echo '<label for="' . $field['name'] . '">' . $field['label'] . '</label>';
		
		if ($field['type'] == 'text') {
			echo '<input type="text" name="' . $field['name'] . '" value="' . $field['value'] . '" />';
		} elseif ($field['type'] == 'select') {
			echo '<select name="' . $field['name'] . '">';
			echo '<option value="Admin"'.($field['value'] == 'Admin' ? ' selected="selected"' : '').'>Admin</option>';
			echo '<option value="Editor"'.($field['value'] == 'Editor' ? ' selected="selected"' : '').'>Editor</option>';
			echo '<option value="User"'.($field['value'] == 'User' ? ' selected="selected"' : '').'>User</option>';
			echo '</select>';
		}
		
		echo '<br />';
	}
	
	echo '<input type="submit" value="Save" />';
	echo '</form>';
}

// 8
function delete_user()
{
	echo 'Delete User';
	
	$user = [
		'name' => 'John Doe',
		'email' => 'john@example.com',
	];
	
	echo '<p>Are you sure you want to delete ' . $user['name'] . ' (' . $user['email'] . ')?</p>';
	
	echo '<form>';
	echo '<input type="hidden" name="user_id" value="123" />';
	echo '<input type="submit" value="Delete" />';
	echo '</form>';
}

// 9
function login_form()
{
	echo 'Login Form';
	
	$fields = [
		['name' => 'email', 'label' => 'Email Address', 'type' => 'text'],
		['name' => 'password', 'label' => 'Password', 'type' => 'password'],
	];
	
	echo '<form>';
	foreach ($fields as $field) {
		echo '<label for="' . $field['name'] . '">' . $field['label'] . '</label>';
		
		if ($field['type'] == 'text') {
			echo '<input type="text" name="' . $field['name'] . '" />';
		} elseif ($field['type'] == 'password') {
			echo '<input type="password" name="' . $field['name'] . '" />';
		}
		
		echo '<br />';
	}
	
	echo '<input type="submit" value="Login" />';
	echo '</form>';
}

// 10
function forgot_password()
{
	echo 'Forgot Password';
	
	echo '<form>';
	echo '<label for="email">Email Address:</label><input type="text" name="email" />'; 
	echo '<input type="submit" value="Reset Password" />';
	echo '</form>';
}

// 11
function reset_password()
{
	echo 'Reset Password';
	
	$fields = [
		['name' => 'password', 'label' => 'Password', 'type' => 'password'],
		['name' => 'confirm_password', 'label' => 'Confirm Password', 'type' => 'password'],
	];
	
	echo '<form>';
	foreach ($fields as $field) {
		echo '<label for="' . $field['name'] . '">' . $field['label'] . '</label>';
		echo '<input type="password" name="' . $field['name'] . '" />';
		echo '<br />';
	}
	
	echo '<input type="submit" value="Reset Password" />';
	echo '</form>';
}