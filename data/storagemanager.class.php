<?php
	/**
	 * Uma classe apenas para maniplar dados do $_SESSION
	 */
	class StorageManager	{
		
		function __construct()	{
			if (session_id() == '') {
				session_start();
			}
		}

		public function has($key)	{
			return isset($_SESSION[$key]);
		}

		public function set($key, $value)	{
			$_SESSION[$key] = $value;
		}

		public function get($key)	{
			return $_SESSION[$key];
		}

		public function remove($key)	{
			unset($_SESSION[$this->key]);
		}

		public function removeAll()	{
			session_unset();
		}

		public function del()	{
			session_destroy();
		}
	}