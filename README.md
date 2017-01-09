# Install with composer
```json
{
  "require" : {
    "wattanar/sqlsrv" : "dev-master"
  }
}
```
# How to use
```php

use Wattanar\Sqlsrv;

Sqlsrv::connect($servername, $username, $password, $dbname);
Sqlsrv::json($connection, $sql, $parameters);
Sqlsrv::array($connection, $sql, $parameters);
Sqlsrv::hasRows($connection, $sql, $parameters);
Sqlsrv::query($connection, $sql, $parameters);

```
