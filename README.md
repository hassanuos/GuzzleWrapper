# GuzzleWrapper
This wrapper is for every framework of php you can use it.


# Usage 

### GET Request

```php 
$response = GuzzleWrapper::get('https://reqres.in/api/users', []);
$data = $response->json();
print_r($data);`
```
### POST Request

```php
$response = GuzzleWrapper::get('https://reqres.in/api/users', [
      "name" => "morpheus",
      "job" => "leader"
    ]);
$data = $response->json();`
print_r($data);
```
