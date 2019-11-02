# **Laravel API**
<br/>

>#### Installation

1.Clone project from github
```
git clone https://github.com/tee-moore/api-test.git
```

2.Create .env file, add database credentials and create application key
```
php artisan key:generate
```

3.Install dependencies using composer
```
php artisan migrate
```
4.Run migration
```
php artisan migrate
```
5.Run seeder
```
php artisan db:seed
```
6.Generate secret key for JWT
```
php artisan jwt:secret
```
7.Import collection from root directory to Postman ``Movie.postman_collection.json``

8.Update auth token in authorization headers  
<br/>
<br/>
  
>#### Endpoints.

|  Method   |         Path              |
|-----------| --------------------------|
| POST      | api/v1/register           |
| POST      | api/v1/login              |
| POST      | api/v1/logout             |
| POST      | api/v1/me                 |
| POST      | api/v1/refresh            |
|-----------|---------------------------|
| POST      | api/v1/actors             |
| GET       | api/v1/actors             |
| GET       | api/v1/actors/{actor}     |
| DELETE    | api/v1/actors/{actor}     |
| PUT/PATCH | api/v1/actors/{actor}     |
|-----------|---------------------------|
| GET       | api/v1/formats            |
| POST      | api/v1/formats            |
| GET       | api/v1/formats/{format}   |
| DELETE    | api/v1/formats/{format}   |
| PUT/PATCH | api/v1/formats/{format}   |
|-----------|---------------------------|
| GET       | api/v1/movies             |
| POST      | api/v1/movies             |
| GET       | api/v1/movies/{movie}     |
| PUT/PATCH | api/v1/movies/{movie}     |
| DELETE    | api/v1/movies/{movie}     |
| GET       | api/v1/search             |




>#### Branch featureAjaxPreordersWithEmail

1.Add to .env file
```
QUEUE_CONNECTION=database
MAIL_DRIVER=log
```
2.Run The Queue Worker
```
php artisan queue:work
```
