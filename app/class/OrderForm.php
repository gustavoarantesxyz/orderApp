<?php
require_once 'Order.php';

/**
 * Class OrderForm
 * 
 * This class represents a form for creating orders with the ability to save and display the form.
 * 
 * The OrderForm class provides methods to save and display an order creation form.
 * 
 * @author gustavoarantes 
 */
class OrderForm
{
    private $html;

    /**
     * Constructs a new OrderForm object.
     * 
     * It loads the HTML template for the order creation form.
     */
    public function __construct()
    {
        $file = dirname(__DIR__) . '/interfaces/form.html';
        $this->html = file_get_contents($file);
    }

    /**
     * Saves the data submitted from the order creation form.
     * 
     * @param array $param The parameters containing the data submitted from the form.
     */
    public function save($param)
    {
        try
        {
            Order::save($param);
            header('Location: index.php');
        }
        catch (Exception $e)
        {
            print $e->getMessage();
        }
    }

    /**
     * Displays the HTML content of the order creation form.
     */
    public function show()
    {
        print $this->html;
    }
}