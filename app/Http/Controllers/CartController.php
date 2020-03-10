<?php

namespace App\Http\Controllers;

use App\Barg;
use App\Document;
use App\DocumentDetail;
use App\Order;
use App\OrderDetail;
use App\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CartController extends Controller
{
    public $id = 0;

    public function addCart($p_id, Request $request)
    {
        $data = array();
        Session::push('cart.id', $p_id);
        Session::save();
        if (Session::has('cart')) {

            $data = Session::get('cart.id');
            if (is_array($data))
                $data = array_unique($data);
            else
                $data = array($data);

        }


        return view('baskets', ['data' => $data]);

    }

    public function changeQuantity($id, Request $request)
    {
        $bargID = (int)$id;
        $count = $request->parameters;
        $off_price = Setting::getOffPrice($bargID) * $count;
        Session::put('count-' . $bargID, $count);
        Session::save();
        return ['price' => $off_price];
    }

    public function removeItem($id)
    {
        $this->id = $id;
        $data = array();
        if (Session::has('cart')) {
            $data = Session::get('cart.id');
            if (is_array($data))
                $data = array_unique($data);
            else
                $data = array($data);
        }

        $collection = collect($data);

        $filtered = $collection->filter(function ($value, $key) {
            $id = $this->id;
            return $value != $id;
        });

        Session::forget('cart');
        if ($filtered->isNotEmpty()) {
            foreach ($filtered->all() as $id) {
                Session::push('cart.id', $id);
            }


            Session::save();
            $data = Session::get('cart.id');
            if (is_array($data))
                $data = array_unique($data);
            else
                $data = array($data);
        } else
            $data = array();

        //return Redirect::back()->with('data',$data);
        return view('baskets', ['data' => $data]);

    }

    public function showCart(Request $request)
    {
        $data = array();
        if (Session::has('cart')) {
            $data = Session::get('cart.id');
            if (is_array($data))
                $data = array_unique($data);
            else
                $data = array($data);
        }

        foreach ($data as $id) {
            if (Session::has('count-' . $id))
                Session::forget('count-' . $id);
        }


        return view('baskets', ['data' => $data]);

    }

    public function removeAllCart(Request $request)
    {
        $data = array();

        if (Session::has('cart')) {

            Session::forget('cart');
        }

        return view('baskets', ['data' => $data]);

    }

    public function get_sum_price()
    {
        $data = array();
        $price = 0;
        if (Session::has('cart')) {
            $data = Session::get('cart.id');
            if (is_array($data))
                $data = array_unique($data);
            else
                $data = array($data);
        }


        foreach ($data as $id) {
            $id_barg = Barg::find($id)->F_BargID;
            $count = (int)Session::get('count-' . $id_barg, 1);
            $item_price = ((int)Setting::getOffPrice($id_barg)) * $count;
            $price = $price + $item_price;
        }
        return $price;
    }

    public function pay_order()
    {
        $data = array();
        if (Session::has('cart')) {
            $data = Session::get('cart.id');
            if (is_array($data))
                $data = array_unique($data);
            else
                $data = array($data);
        }

        $price = $this->get_sum_price();

        if ($price > 0) {


            $MerchantID = 'b7c7dd52-8cdd-11e9-96ce-000c29344814'; //Required
            $Amount = $price;
            $Description = 'سفارش خرید '; // Required
            $Email = 'UserEmail@Mail.Com'; // Optional
            $Mobile = '09172914763'; // Optional
            $CallbackURL = url('verify');

            $client = new \SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);


            $result = $client->PaymentRequest(
                [
                    'MerchantID' => $MerchantID,
                    'Amount' => $Amount,
                    'Description' => $Description,
                    'Email' => $Email,
                    'Mobile' => $Mobile,
                    'CallbackURL' => $CallbackURL,
                ]
            );
            //dd($result);
            if ($result->Status == 100) {
                //  Header('Location: https://www.zarinpal.com/pg/StartPay/' . $result->Authority . '/ZarinGate');
                return redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result->Authority . '/ZarinGate');
            } else {

                return view('baskets.error');

            }
        } else {
            return view('baskets', ['data' => $data]);
        }

    }

    public function back_order($order_id)
    {
        $order = Order::with('OrderDetail')->find($order_id);

        return view('baskets.back', ["order" => $order]);

    }

    public static function getCartCount()
    {
        $data = array();
        $count = 0;
        if (Session::has('cart')) {
            $data = Session::get('cart.id');
            if (is_array($data))
                $data = array_unique($data);
            else
                $data = array($data);
        }


        foreach ($data as $id) {
            $count = $count + 1;
        }
        return $count;

    }

    public function save_order($data)
    {


        date_default_timezone_set("Asia/Tehran");

        $F_DocID = $this->save_document($data->F_Des);
        $F_UserID = Auth::id();
        $F_FinalFactor = $data->F_SumFactor - (($data->F_SumFactor / 100) * $data->F_Tax);
        $order = new Order();
        $order->F_Time = date("h:i:s");
        $order->F_Date = date("Y-m-d");
        $order->F_UserID = $F_UserID;
        $order->F_DocID = $F_DocID;
        $order->F_FinalFactor = $F_FinalFactor;
        $order->F_Tax = $data->F_Tax;
        $order->F_Des = $data->F_Des;
        $order->F_SumFactor = $data->F_SumFactor;
        $order->F_PeygiriCode = $data->F_PeygiriCode;
        $order->save();


        $cart = array();

        if (Session::has('cart')) {
            $cart = Session::get('cart.id');
            if (is_array($cart))
                $cart = array_unique($cart);
            else
                $cart = array($cart);
        }

        foreach ($cart as $id) {
            $count = (int)Session::get('count-' . $id, 1);
            $document_detail = new DocumentDetail();
            $document_detail->F_UserID = $F_UserID;
            $document_detail->F_DocumentID = $F_DocID;
            $document_detail->F_BargID = (int)$id;
            $document_detail->F_Bedehkar = 0;
            $document_detail->F_Bestankar = Setting::getOffPrice($id) * $count;
            $document_detail->F_Des = $data->F_Des;
            $document_detail->F_PeygiriCode = $data->F_PeygiriCode;
            $document_detail->save();
        }

        foreach ($cart as $id) {
            $count = Session::get('count-' . $id, 1);
            $F_QRCode = 'qr-' . $id . $order->F_OrderID . '-' . $F_UserID . '-' . rand(11111, 99999);
            $order_detail = new OrderDetail();
            $order_detail->F_OrderID = $order->F_OrderID;
            $order_detail->F_BargID = (int)$id;
            $order_detail->F_Count = $count;
            $order_detail->F_QRCode = $F_QRCode;
            $order_detail->F_State = 1;
            $order_detail->save();

            QrCode::size(500)->format('png')->generate($F_QRCode, storage_path() . '/qr_code/' . $F_QRCode . '.png');

        }
        Session::forget('cart');
        return $order->F_OrderID;

    }

    public function save_document($F_DocDes)
    {
        date_default_timezone_set("Asia/Tehran");

        $F_Date = date("Y-m-d");
        $F_Time = date("h:i:s");
        $document = new Document();

        $document->F_Date = $F_Date;
        $document->F_Time = $F_Time;
        $document->F_DocDes = $F_DocDes;

        $document->save();
        return $document->F_DocumentID;

    }

    public function verify_order()
    {
        $data = array();
        if (Session::has('cart')) {
            $data = Session::get('cart.id');
            if (is_array($data))
                $data = array_unique($data);
            else
                $data = array($data);
        }

        $price = $this->get_sum_price();


        $MerchantID = 'b7c7dd52-8cdd-11e9-96ce-000c29344814';
        $Amount = $price;
        $Authority = $_GET['Authority'];

        if ($_GET['Status'] == 'OK') {

            $client = new \SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                ['MerchantID' => $MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $Amount]
            );

            if ($result->Status == 100) {
                $order = new \stdClass();
                $order->F_Des = "خرید تخفیف";
                $order->F_SumFactor = $price;
                $order->F_Tax = 0;
                $order->F_PeygiriCode = $result->RefID;
                $order_id = $this->save_order($order);

                return redirect(url('baskets/order/' . $order_id));
            } else {
                return view('baskets.error');
            }
        } else {
            return view('baskets.error');
        }

    }

}
