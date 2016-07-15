# sqlsrv

```php

use Wattanar\Sqlsrv;

Sqlsrv::connect(SERVERNAME, USERNAME, PASSWORD, DBNAME); // Create connection
Sqlsrv::queryJson(CONNECTION, QUERY, PARAMS); // return json
Sqlsrv::queryArray(CONNECTION, QUERY, PARAMS); // return array
Sqlsrv::queryArrayObject(CONNECTION, QUERY, PARAMS); // return array object
Sqlsrv::hasRows(CONNECTION, QUERY, PARAMS); // return bool
Sqlsrv::insert(CONNECTION, QUERY, PARAMS); // return bool
Sqlsrv::update(CONNECTION, QUERY, PARAMS); // return bool
Sqlsrv::delete(CONNECTION, QUERY, PARAMS); // return bool

```