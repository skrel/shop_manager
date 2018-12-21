![Download](https://img.shields.io/badge/php-7-green.svg)
![Download](https://img.shields.io/badge/MySQL-database-red.svg)
![Download](https://img.shields.io/badge/XAMPP-v3.2.2-blue.svg)
![Download](https://img.shields.io/badge/MS-SharePoint-yellow.svg)

# shop_manager_description

-	Transfer of orders to Shop from Design team electronically
-	Creation of QR coding system to eliminate printing of documents for shop and field use.
-	Implement time tracking portion of database to record historical data for future use.

# shop_manager_run_local

For using this sample you need MySQL table and MS SharePoint account. 

    $sql = "CREATE TABLE users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            job VARCHAR(255) NOT NULL,
            tack_code VARCHAR(255) NOT NULL,
            description VARCHAR(255)
            file VARCHAR(255) NOT NULL,
            dayneeded DATE NOT NULL,
            start VARCHAR(20)  
            complete VARCHAR(20) NOT NULL,
            delivered DATE NOT NULL,
            description VARCHAR(255)            
            )";

Open the browser: http://localhost/record . Localhost set up on IP 10.77.10.136 as a default. 


# shop_manager_home_page

![shop_manager](https://user-images.githubusercontent.com/43278778/49749006-324bc600-fc75-11e8-94f3-ab1afebcf950.jpg)
