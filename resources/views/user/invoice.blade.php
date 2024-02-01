<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
        }

        .invoice {
            max-width: 800px;
            margin: auto;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice h2 {
            color: #333;
        }

        .invoice .details {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .invoice .details .left {
            width: 50%;
        }

        .invoice .details .right {
            text-align: right;
            width: 50%;
        }

        .invoice table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .invoice table, .invoice th, .invoice td {
            border: 1px solid #ddd;
        }

        .invoice th, .invoice td {
            padding: 10px;
            text-align: left;
        }

        .invoice .total {
            margin-top: 20px;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="invoice">
        <h2>Invoice</h2>
        <div class="details">
            <div class="left">
                <p><strong>From:</strong> Your Company Name</p>
                <p>Your Address</p>
                <p>City, Country</p>
            </div>
            <div class="right">
                <p><strong>To:</strong> Customer Name</p>
                <p>Customer Address</p>
                <p>City, Country</p>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataCheckout as $item)
                <tr>
                    <td>{{ $produk_barang = $item->produk_barang }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
                <!-- Loop through items in the invoice -->
            </tbody>
        </table>
        <div class="total">
            <p><strong>Total:</strong></p>
        </div>
    </div>
</body>

</html>
