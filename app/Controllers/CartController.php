<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CartController extends BaseController
{
    public function index()
    {
        $data['_viewfile'] = 'shop/cart';
        return view('layouts/main', $data);
    }

    public function add_to_cart($productId = null){
        $session = session();
        $data = [
            'id' => $productId,
            'quantity' => $this->request->getPost('quantity')
        ];
        helper('AuthHelper');
        if (checkLogin()) {
            $this->add_to_table($data);
        } else {
            $this->add_to_session($data);
        }
        

        $response = [
            'status' => true,
            'id' => $productId,
            'quantity' => $this->request->getPost('quantity'),
            'cart' => $session->get('cart')
        ];
        return json_encode($response);
    }

    public function cart_products(){
        $session = session();
        $cart = json_decode($session->get('cart'), true);
        echo '<pre>';
        var_dump($cart);
        echo '</pre>';
    }

    public function empty_cart(){
        $session = session();
        $session->remove('cart');
        echo "Cart Empty";
    }

    private function add_to_session($productData = null){
        $session = session();
        $cartSession = $session->get('cart');
        if ($cartSession !== NULL) {
            $cartItems = json_decode($cartSession, true);
            $itemKey = (string)array_search($productData['id'], array_column($cartItems, 'id'));
            if ($itemKey != null) {
                $cartItems[$itemKey]['quantity'] += $productData['quantity'];
            }
            else {
                array_push($cartItems, $productData);
            }
            $session->set('cart', json_encode($cartItems));
        } else {
            $cartItems = [];
            array_push($cartItems, $productData);
            $session->set('cart', json_encode($cartItems));
        }
    }

    private function add_to_table($productData = null){
        
    }
}
