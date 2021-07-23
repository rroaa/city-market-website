# CityMarket Website
City Market is a simple website where supermarket's staff can manage the supermarket operations such as adding new items to the supermarket, contract with new suppliers and add them to the suppliers list. In addition to update and view their information.

Made as a pre-requisite for the testing phase in ISTQB Bootcamp's capstone project. 

Operations that can be done using CityMarket Website: 

* Add new item to the supermarket.
* Update existing item info. 
* View items list.
* Add new supplier for the supermarket.
* Update existing supplier info. 
* View suppliers list. 

# MySQL Database Configuration 

Before opening the website, you need to run the following commands in PhpMyAdmin: 

* Creation of the database: 

```sql
create database City_Market;
```

* Creation of Tables:

 1. Staff Table:

```sql
create table staff(
ID INT(10) NOT NULL,
s_name VARCHAR(30) NOT NULL,
phone VARCHAR(10) NOT NULL,
password VARCHAR(10) NOT NULL,
PRIMARY KEY(ID)
);
```
2. Suppliers Table: 

```sql
create table suppliers(
supplier_id INT(10) NOT NULL,
company_name VARCHAR(30) NOT NULL,
contact_no INT(10) NOT NULL,
email VARCHAR(30) NOT NULL,
PRIMARY KEY(supplier_id)
);
```
3. Items Table: 
```sql
create table items(
item_sn INT(10) NOT NULL,
item_name VARCHAR(30) NOT NULL,
item_price double NOT NULL,
item_category VARCHAR(30) NOT NULL,
item_amount INT(10) NOT NULL,
supplier_id INT(10) NOT NULL,
PRIMARY KEY(item_sn),
FOREIGN KEY (supplier_id) REFERENCES suppliers(supplier_id)
);
```
4. Insert a staff member: 

```sql
INSERT INTO `staff`(`ID`, `s_name`, `phone`, `password`) VALUES (1234567899,'Roaa','0500000000','123123')
```

# How to run CityMarket: 
1. Download XAMPP program.
2. Start the XAMPP program.
3. Place CityMarket file in the "HTDocs" folder located under the "XAMMP" folder.
4. Go to XAMPP Program and click on 'Go to application' button.
5. Click on CityMarket folder then click on login.php.
