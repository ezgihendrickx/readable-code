<?php
function orderPizza($pizzaType, $customer)
{
    $customer = ucfirst($customer);
    $Address = getAddress($customer);
    $Price = getPrice($pizzaType);

    echo 'Creating new order...<br>';
    echo "A {$pizzaType} pizza should be sent to {$customer}.<br>";
    echo "The address: {$Address}.<br>";
    echo "The bill is €{$Price}.<br>";
    echo "Order finished.<br><br>";
}

function getAddress($customer)
{
    switch ($customer) {
        case 'Koen':
            return 'A yacht in Antwerp.';
        case 'Manuele':
            return 'somewhere in Belgium.';
        case 'Students':
            return 'BeCode office';
        default:
            return 'N/A';
    }
}

function getPrice($pizzaType)
{
    switch ($pizzaType) {
        case 'margherita':
            return '5';
        case 'golden':
            return '100';
        case 'calzone':
            return '10';
        case 'hawaii':
            throw new Exception('No way!!');
        default:
            return 'Comming Soon!!';
    }
}

function goGetPizza()
{
    orderPizza('calzone', 'koen');
    orderPizza('margherita', 'manuele');
    orderPizza('golden', 'students');
};

goGetPizza();
