<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - {{ $order->code }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .success-icon {
            font-size: 60px;
            color: #28a745;
            margin-bottom: 15px;
        }

        h1 {
            color: #28a745;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #6c757d;
            font-size: 18px;
        }

        .order-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 10px;
        }

        .info-label {
            font-weight: 600;
            color: #495057;
        }

        .order-details {
            margin-bottom: 30px;
        }

        .detail-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .detail-table th {
            background-color: #f1f1f1;
            padding: 12px;
            text-align: left;
            font-weight: 600;
        }

        .detail-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        .total-row {
            font-weight: 600;
            background-color: #f8f9fa;
        }

        .actions {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .contact-info {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .info-grid {
                grid-template-columns: 1fr;
            }

            .container {
                margin: 20px;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="success-icon">✓</div>
        <h1>Order Confirmed!</h1>
        <p class="subtitle">We have received your order and will contact you shortly.</p>
    </div>

    <div class="order-info">
        <h2>Order Information</h2>
        <div class="info-grid">
            <div class="info-item">
                <span class="info-label">Order Code:</span>
                <div>{{ $order->code }}</div>
            </div>
            <div class="info-item">
                <span class="info-label">Order Date:</span>
                <div>{{ date('F j, Y, g:i a', $order->date) }}</div>
            </div>
            <div class="info-item">
                <span class="info-label">Payment Method:</span>
                <div>{{ ucwords(str_replace('_', ' ', $order->payment_type)) }}</div>
            </div>
            <div class="info-item">
                <span class="info-label">Payment Status:</span>
                <div>
                        <span style="color: {{ $order->payment_status == 'paid' ? '#28a745' : '#dc3545' }};">
                            {{ ucfirst($order->payment_status) }}
                        </span>
                </div>
            </div>
        </div>
    </div>

    <div class="order-details">
        <h2>Order Details</h2>
        <table class="detail-table">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->orderDetails as $detail)
                <tr>
                    <td>{{ $detail->product->name }}</td>
                    <td>{{ $detail->quantity }}</td>
                    <td>{{ single_price($detail->price) }}</td>
                    <td>{{ single_price($detail->price * $detail->quantity) }}</td>
                </tr>
            @endforeach
            <tr class="total-row">
                <td colspan="3" style="text-align: right;">Subtotal:</td>
                <td>{{ single_price($order->grand_total - $order->orderDetails->sum('tax') - $order->orderDetails->sum('shipping_cost')) }}</td>
            </tr>
            <tr class="total-row">
                <td colspan="3" style="text-align: right;">Tax:</td>
                <td>{{ single_price($order->orderDetails->sum('tax')) }}</td>
            </tr>
            <tr class="total-row">
                <td colspan="3" style="text-align: right;">Shipping:</td>
                <td>{{ single_price($order->orderDetails->sum('shipping_cost')) }}</td>
            </tr>
            <tr class="total-row">
                <td colspan="3" style="text-align: right;"><strong>Grand Total:</strong></td>
                <td><strong>{{ single_price($order->grand_total) }}</strong></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="order-info">
        <h2>Shipping Information</h2>
        <div class="info-grid">
            <div class="info-item">
                <span class="info-label">Name:</span>
                <div>{{ $shippingAddress['name'] }}</div>
            </div>
            <div class="info-item">
                <span class="info-label">Email:</span>
                <div>{{ $shippingAddress['email'] }}</div>
            </div>
            <div class="info-item">
                <span class="info-label">Phone:</span>
                <div>{{ $shippingAddress['phone'] }}</div>
            </div>
            <div class="info-item">
                <span class="info-label">Address:</span>
                <div>{{ $shippingAddress['address'] }}</div>
            </div>
            <div class="info-item">
                <span class="info-label">City:</span>
                <div>{{ $shippingAddress['city'] }}</div>
            </div>
            <div class="info-item">
                <span class="info-label">State:</span>
                <div>{{ $shippingAddress['state'] }}</div>
            </div>
            <div class="info-item">
                <span class="info-label">Country:</span>
                <div>{{ $shippingAddress['country'] }}</div>
            </div>
            <div class="info-item">
                <span class="info-label">Postal Code:</span>
                <div>{{ $shippingAddress['postal_code'] }}</div>
            </div>
        </div>
    </div>

    <div class="actions">
        <a href="{{ route('home') }}" class="btn">Continue Shopping</a>
    </div>

    <div class="contact-info">
        <p>If you have any questions about your order, please contact us at {{ get_setting('contact_email') }}</p>
        <p>Thank you for shopping with us!</p>
    </div>
</div>
</body>
</html>
