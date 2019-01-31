![](https://cdn-images-1.medium.com/max/1600/1*OGCE-B4onkKZyAzf1Ge0Ew.png)

#Laravel php and ajax based dropdown list of country, state and city
====================================================================

#Overview

	This plugin help to get countries, states list and cities list.

	Attached Json api file(countries_states_cities_list.json) in api Folder. 

#Requirements

	PHP Laravel 5.4 Version
	MySql

#Installation

Step 1 : Download this code and paste it into your local machine (xampp or wampp).

```html
		composer update
```
Step 2 : Create database and import .sql file from database folder Or use migration Command.

```html
	php artisan migrate
```
```html
	php artisan db:seed
```
Step 3 : Run the file choose countries to get related states and cities.
