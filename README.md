 ![testing](https://img.shields.io/badge/Unit%20testing-Passed-brightgreen.svg?style=flat) ![Design pattern: Repository](https://img.shields.io/badge/Design%20pattern-Repository-blue.svg?style=flat) ![PHP Framework: Laravel 8.12](https://img.shields.io/badge/PHP%20Framework-%20Laravel%208.12-red.svg?style=flat)

## About Vehicle project

Vehicle is a simple project that contains API for listing and filtering data based on the assigned parameters


## Installed software and configuration
01. XAMPP SERVER (PHP 7.3.*)

## Restful services request

### GET REQUEST
The services is using the Restful API request.

###### Filter function 
* This request will return all the vehicles that meet the criteria of the filer & sort query
*  Get request To [http://local.afaqy.com/public/api/vehicle/expenses/list](http://local.afaqy.com/public/api/api/vehicle/expenses/list)
* possible payload should be like the example below
```
?type='' => [] array of items [insurance,fuel,service]
?name='' => may be a full vehicle name or part of it
?max_cost='' => should be an integer contains max cost
?min_cost='' => should be an integer contains min cost
?max_creation_date='' => should be in this formate (YYYY-MM-DD)
?min_creation_date='' => should be in this formate (YYYY-MM-DD)
?cost='' => sorting ['asc','desc']
?creation_date='' => sorting ['asc','desc']
?limit='' => should be an integer to get certain limit from this data.
```
* response should be like 
```
[{
	"id": 91,
	"vehicleName": "Mozelle Spencer",
	"plateNumber": "4380814",
	"cost": 4,
	"createdAt": "1970-01-01 00:00:00",
	"type": "insurance"
}, {
	"id": 197,
	"vehicleName": "Cecelia Bradtke",
	"plateNumber": "2497706",
	"cost": 2,
	"createdAt": "1970-01-01 00:00:00",
	"type": "insurance"
}, {
	"id": 425,
	"vehicleName": "Delphia Vandervort",
	"plateNumber": "3517346",
	"cost": 7,
	"createdAt": "1970-01-01 00:00:00",
	"type": "insurance"
}]
```
## Deployment
01. Pull the repo to your apache folder "htdocs" - I used Xampp
02. create a new entry in your hosts file - in windows it exists in 
``` C:\Windows\System32\drivers\etc\hosts ```
03. host name will be 
 ``` local.afaqy.com ``` 
04. Add this host to your apache v-host file - in xampp windows it exists in 
 ```XAMPP\apache\conf\extra\httpd-vhosts.conf``` 
05. After this step you should restart your apache.
06. [Given that you already have the database imported ] to run the view table in the database you should use this command 
``` php artisan migrate --path=/database/migrations/2020_10_29_234444_create_expenses_list_table.php ```
07. you can use the project through the link 
```  http://local.afaqy.com ```
 
## Testing
### Unit testing
01. I wrote unit testing cases for the filter functions 
02. to run the test cases use this command ``` php artisan test ```

## Built With

* [Laravel 8.x](https://laravel.com/docs/8.x) - The web framework used
## Acknowledgments

* Hat tip to anyone whose answers on stackoverflow were used
* Support the community
* Never dream for success, Work for it.
