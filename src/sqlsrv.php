<?php

namespace Wattanar;

class Sqlsrv
{
	public static function connect($server, $uid, $pwd, $dbname)
	{
		$connection = array( 
			"Database" => "$dbname", 
			"UID" => "$uid", 
			"PWD" => "$pwd" ,
			"CharacterSet" => "UTF-8",
			"ReturnDatesAsStrings" => true,
			"MultipleActiveResultSets" => true
		);

		return sqlsrv_connect($server, $connection);
	}

	public static function queryJson($connection, $query, $params = NULL)
	{
		if (!$params) {
			$query = sqlsrv_query($connection, $query);	
		} else {
			$query = sqlsrv_query($connection, $query, $params);	
		}

		if ($query) {
			$json = [];
			while ($fetch = sqlsrv_fetch_object($query)) {
				$json[] = $fetch;
			}
			return json_encode($json);
		} else {
			return;
		}
	}

	public static function queryArrayObject($connection, $query, $params = NULL)
	{
		if (!$params) {
			$query = sqlsrv_query($connection, $query);
		} else {
			$query = sqlsrv_query($connection, $query, $params);
		}

		if ($query) {
			$array_object = [];
			while ($fetch = sqlsrv_fetch_object($query)) {
				$array_object[] = $fetch;
			}
			return $array_object;
		} else {
			return;
		}
	}

	public static function queryArray($connection, $query, $params = NULL)
	{
		if (!$params) {
			$query = sqlsrv_query($connection, $query);
		} else {
			$query = sqlsrv_query($connection, $query, $params);
		}

		if ($query) {
			$array = [];
			while ($fetch = sqlsrv_fetch_array($query)) {
				$array[] = $fetch;
			}
			return $array;
		} else {
			return;
		}
	}

	public static function hasRows($connection, $query, $params = NULL)
	{
		if (!$params) {
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

	public static function insert($connection, $query, $params = NULL)
	{
		if (!$params) {
			$query = sqlsrv_query($connection, $query);
		} else {
			$query = sqlsrv_query($connection, $query, $params);
		}
		return $query;
	}

	public static function update($connection, $query, $params = NULL)
	{
		if (!$params) {
			$query = sqlsrv_query($connection, $query);
		} else {
			$query = sqlsrv_query($connection, $query, $params);
		}
		return $query;
	}

	public static function delete($connection, $query, $params = NULL)
	{
		if (!$params) {
			$query = sqlsrv_query($connection, $query);
		} else {
			$query = sqlsrv_query($connection, $query, $params);
		}
		return $query;
	}
}