<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 60px;
    }

    table {
      border: 2px solid black;
      text-align: center;
    }

    th {
      border: 2px solid black;
      text-align: center;
      color: white;
      font: 20px;
      font-weight: bold;
      background-color: black;
      width: 800px;
    }

    td {
      border: 1px solid skyblue;
    }

    .cart_value {
      text-align: center;
      margin-bottom: 70px;
      padding: 18px;
    }

    .remove-btn {
      background-color: red;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 16px;
    }

    .remove-btn:hover {
      background-color: darkred;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
  </div>
  <!-- end hero area -->

  <div class="div_deg">
    <table>
      <tr>
        <th>Product Title</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
      <?php
      $value = 0;
      ?>
      @foreach($cart as $cart)
      <tr>
        <td>{{$cart->product->title}}</td>
        <td>{{$cart->product->price}}</td>
        <td>
          <img width="150" src="/products/{{$cart->product->image}}">
        </td>
        <td>
          <form action="{{ url('remove_cart', $cart->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="remove-btn">Remove</button>
          </form>
        </td>
      </tr>
      <?php
      $value = $value + $cart->product->price;
      ?>
      @endforeach
    </table>
  </div>
  <div class="cart_value">
    <h3>Total Value of Cart is : ${{$value}}</h3>
  </div>

  <!-- Footer section -->
  @include('home.footer')
  <!--End of Footer section -->

</body>

</html>
