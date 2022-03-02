<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<style>
#invoice {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#invoice td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#invoice tr:nth-child(even){background-color: #f2f2f2;}

#invoice tr:hover {background-color: #ddd;}

#invoice th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Invoice list</h1>
<table id="invoice">
  <tr>
  <th>Invoice_Number</th>
  <th>Date</th>
  <th>Item_name</th>
  <th>product_id</th>
  <th>quantity</th>
  <th>subtotal</th>
  </tr>
  
  @foreach($invoice as $invoce)
  <tr>
    <td>{{$invoce->invoice_number}}</td>
    <td>{{$invoce->Date}}</td>
    <td>{{$invoce->item_name}}</td>
    <td>{{$invoce->product_id}}</td>
    <td>{{$invoce->quantity}}</td>
    <td>{{$invoce->subtotal}}</td>
    </tr>
    @endforeach>

</table>
<a class="btn btn-sucsess" href="{{url('export')}}">Export pdf</a>
</body>
</html>
       