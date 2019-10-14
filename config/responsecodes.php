<?php

define('ERROR_1000', 1000); define('ERROR_1000_MESSAGE', 'User already exist');
define('ERROR_1001', 1001); define('ERROR_1001_MESSAGE', 'User not found');

//Verification
define('ERROR_2000', 2000); define('ERROR_2000_MESSAGE', 'Incorrect code');
define('ERROR_2001', 2001); define('ERROR_2001_MESSAGE', 'Wait 30 seconds');
define('ERROR_2002', 2002); define('ERROR_2002_MESSAGE', 'User is deleted or blocked');

//catalog
define('ERROR_3000', 3000); define('ERROR_3000_MESSAGE', 'Store not found');
define('ERROR_3001', 3001); define('ERROR_3001_MESSAGE', 'Min.price < max.price');
define('ERROR_3002', 3002); define('ERROR_3002_MESSAGE', 'The store is not open at this time');

//product
define('ERROR_4000', 4000); define('ERROR_4000_MESSAGE', 'Product not found');
define('ERROR_4001', 4001); define('ERROR_4001_MESSAGE', 'Products not found');

//city
define('ERROR_5000', 5000); define('ERROR_5000_MESSAGE', 'City not found');
define('ERROR_5001', 5001); define('ERROR_5001_MESSAGE', 'There are no shops in the city');

//favorite
define('ERROR_6000', 6000); define('ERROR_6000_MESSAGE', 'Product already added');
define('ERROR_6001', 6001); define('ERROR_6001_MESSAGE', 'Favorite not found');

//basket
define('ERROR_7000', 7000); define('ERROR_7000_MESSAGE', 'The product is already in the basket');
define('ERROR_7001', 7001); define('ERROR_7001_MESSAGE', 'Product not found in basket');
define('ERROR_7002', 7001); define('ERROR_7002_MESSAGE', 'Not found token or uuid');
define('ERROR_7003', 7003); define('ERROR_7003_MESSAGE', 'Basket empty');

//platform
define('ERROR_8000', 8000); define('ERROR_8000_MESSAGE', 'Platform not found');
define('ERROR_8001', 8001); define('ERROR_8001_MESSAGE', 'Сannot be ordered from this platform');

//addresses
define('ERROR_9000', 9000); define('ERROR_9000_MESSAGE', 'Address overflow');

//payments
define('ERROR_10000', 10000); define('ERROR_10000_MESSAGE', 'Payment system error');
define('ERROR_10001', 10001); define('ERROR_10001_MESSAGE', 'Card data error');
define('ERROR_10002', 10002); define('ERROR_10002_MESSAGE', 'You already have a subscription');

//orders
define('ERROR_20000', 20000); define('ERROR_20000_MESSAGE', 'Сannot delete order');

//orders
define('ERROR_30000', 30000); define('ERROR_30000_MESSAGE', 'Not found TimeZone');
