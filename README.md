# Install
```json
{
  "require" : {
    "wattanar/sqlsrv" : "dev-master"
  }
}
```
# Usage
```
$connection = connect($server, $username, $password, $database)
rows($connection, $query, array $params = null)
hasRows($connection, $query, array $params = null)
query($connection, $query, array $params = null)
```
