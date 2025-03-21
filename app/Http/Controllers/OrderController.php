<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('items.product')->where('user_id', Auth::id())->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $cartItems = Auth::user()->cartItems;
        return view('orders.create', compact('cartItems'));
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->total = $request->total;
        $order->save();

        foreach ($request->items as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item['product_id'];
            $orderItem->quantity = $item['quantity'];
            $orderItem->save();
        }

        return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
    }

    public function show($id)
    {
        $order = Order::with('items.product')->findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
