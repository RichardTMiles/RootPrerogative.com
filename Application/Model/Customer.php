<?php
/**
 * Created by IntelliJ IDEA.
 * User: richardmiles
 * Date: 3/23/18
 * Time: 12:33 PM
 */

namespace Model;


<<<<<<< HEAD
use Model\Helpers\GlobalMap;
=======
use Carbon\Request;
>>>>>>> 5a50d70ff35c37d473decaf542cf34f01c638066
use Table\Cart;
use Table\Items;
use Table\Order;

class Customer extends GlobalMap
{

<<<<<<< HEAD
    public function cart() {
        global $json;
        $json['items'] = [];

        Cart::Get($json['items'], session_id(), []);

        if (empty($json['items'])) {
            $json['items'] = null;
            return null;
        }

        if (!($json['items'][0] ?? false)) {
            $a = $json['items'];
            $json['items'] = [];
            $json['items'][] = $a;
        }

        $json['cartNotifications'] = \count($json['items']);

        // sortDump($json['items']);

        foreach($json['items'] as $key => $value) {
            Items::Get($json['items'][$key], $value['cart_item'], []);
        }

=======
    public function cart($id) {
>>>>>>> 5a50d70ff35c37d473decaf542cf34f01c638066
        return null;
    }

    public function order($itemId){
        global $json;

        $json['order'] = [];

        Order::Get($json['order'], $itemId, []);

        /*
        Order::Post([
            'order_total' => []],
            'order_items' => [],
            $array['order_start'],
            $array['order_costumer'],
            $array['order_server'],
            $array['order_notes']);
        ]);
        */

        return null;
    }

    public function item($itemID){

        global $json, $form;
        // TODO - make sure id is valid
        $json['item'] = [];
        Items::Get($json['item'], $itemID, []);

        if ($_POST) {
            Cart::Post([
                'id'=> $itemID,
                'notes' => $form['notes']
            ]);
        }
<<<<<<< HEAD

        self::sendUpdate(session_id(), '/cartNotifications');

=======
>>>>>>> 5a50d70ff35c37d473decaf542cf34f01c638066
        return null;
    }

    public function games($game) {
        $game = $this->set($game)->word();

        switch ($game) {
            case 'tetris':
                break;
            default:
                $game = null;
        }

        return null;    // Skip the model and move to the view
    }
}