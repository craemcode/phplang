# phplang
I learn php in this repo

## useful functions
variable is_string()--> to check whether var is string
isset()--> show whether a variable is declared.

constant is declared with 'define'
eg define('PI',3.14);

Found out several constants for php


## php three tier programming

Tier 1. Interface tier
The MVC is a design pattern used by software engineers to communicate between the model
and the view through a control. 
Dependency injection allows the client to use a block of code without knowing its implementation

## php crud system
    We assume that the requirement collection and feasibility studies have been carried out.
    first, we create the database with mysql

### step 1: Creating the database.
Created a table with some data entry rules(such as being required etc)
added some records to the table

### step 2: Building an interface
Simple interface built from copy pasting code from the bootstrap website (Stand on the shoulders of giants!)

### step 3: build a querry to display the products from the data layer.
The first step is making a connection to the database. 
two ways to make a connection to the database. the first is mysqli and pdo.

I make a connection by creating a PDO object and feeding it the dsn string.
I then use setAttribute to create some error handling code.

Get the records from the database and store them in an associative array. Iterte over the array
to display the information in the table. 

### Get input from the user from create product form
Once we have the form up and running, we want to get information from the form to the DB.
We first use the get method. The get method "stores" the contents of the form in the URL. I then learn how to extract information from the URL. However, this is a SECURITY TRAP :9