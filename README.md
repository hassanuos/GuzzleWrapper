# GuzzleWrapper
This wrapper is for every framework of php you can use it.


# Usage 


### Add/Remove Authorization Header
Manage authrization header if you need it just replace the token otherwise remove the whole `authorization` index. Below is the line.

`https://github.com/hassanuos/GuzzleWrapper/blob/main/GuzzleWrapper.php#L22`

### GET Request

```php 
$response = GuzzleWrapper::get('https://reqres.in/api/users', []);
$data = $response->json();
print_r($data);
```
### POST Request

```php
$response = GuzzleWrapper::get('https://reqres.in/api/users', [
      "name" => "morpheus",
      "job" => "leader"
    ]);
$data = $response->json();
print_r($data);
```
