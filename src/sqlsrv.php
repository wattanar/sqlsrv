<?php

namespace Wattanar;

class Sqlsrv
{
	public static function connect($server, $username, $password, $database)
	{
		$settings = [
			"Database" => "$database", 
			"UID" => "$username", 
			"PWD" => "$password" ,
			"CharacterSet" => "UTF-8",
			"ReturnDatesAsStrings" => true,
			"MultipleActiveResultSets" => true
		];

		return sqlsrv_connect($server, $settings);
	}

	public static function array($connection, $query, array $params = null)
	{
		if ($params === null) {
			$query = sqlsrv_query($connection, $query);			
		} else {
			$query = sqlsrv_query($connection, $query, $params);
		}

		$array = [];
		$rows = [];

		while ($fetch = sqlsrv_fetch_object($query)) {
			$array[] = $fetch;
		}

		foreach ($array as $value) {
			$rows[] = $value;
		}

		return $rows;
	}

	public static function hasRows($connection, $query, array $params = null)
	{
		if ($params === null) {
			$query = sqlsrv_has_rows(sqlsrv_query(
				$connection,
				$query
			));
		} else {
			$query = sqlsrv_has_rows(sqlsrv_query(
				$connection,
				$query,
				$params
			));
		}

		return $query;
	}

	public static function query($connection, $query, array $params = null)
	{
		if ($params === null) {
			$query = sqlsrv_query($connection, $query);
		} else {
			$query = sqlsrv_query($connection, $query, $params);
		}

		return $query;
	}

	public static function begin($connection)
	{
		return sqlsrv_begin_transaction($connection);
	}

	public static function commit($connection)
	{
		return sqlsrv_commit($connection);
	}

	public static function rollback($connection)
	{
		return sqlsrv_rollback($connection);
	}
}
