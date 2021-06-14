
# BRAND NAME - E Commerce (PHP) 

I created this project with the purpose of completing the mid-semester exam assignment.
of course this project is not good enough to be launched to the public. 
but can be used for learning materials.

i use PHPMailer for register verification. dont forget to settings the smtp.

PS : its mobile friendly.




## Tech Stack

**Client:** HTML , CSS (Bootstrap) , JS

**Server:** PHP (native)

  
## User Features

- Login and Register (Need to Verify)
- Show Product By Category / Latest
- Cart
- Checkout (Can use coupon)
- Verification Payment
- My Orders (History & Order Detail)
- Cccount Setting

## Admin Features

- Login
- CRUDS Coupons
- CRUDS Products
- CRUDS Orders
- CRUDS Payment Confirmation

## Run Locally

Clone the project

```bash
  git clone https://github.com/erastimothy/brand-name.git
```

Go to the project directory and open the folder to your text editor, 
and configure some file
### config.php

```bash
Change the username, password and database (line 3)

$con = mysqli_connect('localhost','root','','brand_name') or die('Error Connection !');

---------------------------------------------------------------------------------------
Change the variable $base_url (line 7) to your new url folder or your index.php file

$base_url = 'http://localhost/php/brand-name/';
```

### registerProses.php (on folder proses)

```bash
  Change configurtaion for SMTP

  $mail->Username (line 84) and $mail->Password (line 87), change to your gmail account.
  and dont forget to turn on lesssecureapps 
  (https://myaccount.google.com/lesssecureapps)
```


Start the server

```bash
  Start the server like usual, to run php web
```

  
## Screenshots

### Homepage
![HomePage](https://raw.github.com/erastimothy/brand-name/master/assets/readme-page/homepage.png)

### Product By Category
![Product By Category](https://raw.github.com/erastimothy/brand-name/master/assets/readme-page/category-page.png)
  
### Cart
![Cart](https://raw.github.com/erastimothy/brand-name/master/assets/readme-page/cart-page.png)

### My Order
![My Order](https://raw.github.com/erastimothy/brand-name/master/assets/readme-page/myorder-page.png)


### Order Detail
![Order Detail](https://raw.github.com/erastimothy/brand-name/master/assets/readme-page/orderdetail-page.png)


### Login As Admin Dashboard
![Login As Admin Dashboard](https://raw.github.com/erastimothy/brand-name/master/assets/readme-page/login-as-admin-menu.png)


### Manage Orders (admin)
![Manage Orders (admin)](https://raw.github.com/erastimothy/brand-name/master/assets/readme-page/orders-admin-page.png)


### Manage Products (admin)
![Manage Products (admin)](https://raw.github.com/erastimothy/brand-name/master/assets/readme-page/products-admin.png)


### Homepage (Mobile)
![Dashboard Admin (Mobile)](https://raw.github.com/erastimothy/brand-name/master/assets/readme-page/user-home-mobile.png)


### Dashboard Admin (Mobile)
![Dashboard Admin (Mobile)](https://raw.github.com/erastimothy/brand-name/master/assets/readme-page/admin-dashboard-mobile.png)




## Authors

- [Eras Timothy](https://www.github.com/erastimothy)

  
