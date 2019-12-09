# Laravel Developer Challenge
a challenge for Laravel developer position in Zarcony.


### Create a Pizza order application

Implement the following logic using the Laravel framwork.

Your pizza ordering application should be with the following functionality:
 <br/> <br/>
- Add Pizza: <br/>
-- All crud functionality shoud be implemented. <br/>

- Order pizza: <br/>
-- All crud functionality shoud be implemented. <br/>
-- It should be possible to specify the desired flavors of pizza, the number of pizzas and their size. <br/>
-- An order should contain information regarding the customer (Customer name and Address are must). <br/>

- Update an order: <br/>
-- You can only update the status of delivery for the order <br/>
-- You can not delete an order unless it's delieverd. <br/>


- Retrieve an order: <br/>
-- It should be possible to retrieve the order by id or name. <br/>

- List orders: <br/>
-- List all the orders at once. <br/>
-- Filter orders by customer name or the status of delivery. <br/>


You must implement a way to check the status of delivery. <br/>
It's possible to order the same flavor of pizza but with different sizes multiple times. <br/>

#### Steps to run the project

you should have install mysql, composer and its prerequisites 

To get started, log in to the MySQL console as the root database user with:

```sh
$ sudo mysql
```

To create a new database, run the following command from your MySQL console:


```sh
mysql> CREATE DATABASE Pizza;
```

Now you can create a new user and grant them full privileges on the custom database you’ve just created. In this example, we’re creating a user named pizza_user with the password password

```sh
mysql> GRANT ALL ON Pizza.* TO 'pizza_user'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;
```

Following this, exit the MySQL shell:

```sh
mysql> exit;
```

Now, clone the project :

```sh
git clone 
```


3 steps left to run the project :


```sh
php artisan migrate
```
```sh
php artisan db:seed
```
```sh
php artisan serve
```