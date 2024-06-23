<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
      table
      {
        border: 2px solid black;
        text-align:center;
      }    

      th{
        border: 2px solid black;
        text-align:center;
        color:white;
        font:20px;
        font-weight:bold;
        background-color:black;
        width:800px;
      }

      td{
        border:1px solid skyblue;

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

        </tr>
        @foreach($cart as $cart)
        <tr>
            <td>{{$cart->product->title}}</td>
            <td>{{$cart->product->price}}</td>
            <td>
                <img width="150" src="/products/{{$cart->product->image}}">
            </td>
        </tr>
        @endforeach
    </table>
</div>


   

  <!-- Footer section -->
 
  @include('home.footer')
 
  <!--End of Footer section -->

</body>

</html>