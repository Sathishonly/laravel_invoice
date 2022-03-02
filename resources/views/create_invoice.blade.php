<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $('#add').click(function () {
        var n = $('.row').length + 1;
        var temp = $('.row:first').clone();
        $('input:first', temp).attr('placeholder', 'Item #' + n)
        $('.row:last').after(temp);
    });
});
        </script>
</head>
<body>
    <h1>Invoice</h1><br>
    
   <form action="store" method="POST" >
  <label for="">Invoice number:</label><input type="text" name="invoice_number"><br>
  <label for="">Date:</label><input type="date" name="Date" ><br>
  <div class="row">
  <label for="">Item_name:</label><input type="text" name="item_name"><br>
  <label for="">Product_id: </label><input type="text" name="product_id"><br>
  <label for="">Quantity: </label><input type="text" name="quantity"><br>
  <label for="">Subtotal:</label><input type="text" name="subtotal"><br>
  </div>
  <input type='button' id='add' value='Add item' /><br>
  <input type="submit" name="create">
  @csrf
  </form>
</body>
</html>    







