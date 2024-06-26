<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        table {
           border: 2px solid skyblue;
           text-align: center;
           width: 100%;
           border-collapse: collapse;
        }
        
        th {
           background-color: skyblue;
           padding: 10px;
           font-size: 18px;
           font-weight: bold;
           text-align: center; 
        }

        td {
            color: white;
            padding: 10px;
            border: 1px solid skyblue;
        }

        .table_center {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow-x: auto;
        }  

        img {
            max-width: 100%;
            height: auto;
        }

        .nowrap {
            white-space: nowrap;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div class="table_center">
              <table>
                <tr>
                  <th>Customer Name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Product Title</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Change Status</th>
                  <th>Print PDF</th>
                </tr>
                @foreach($data as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->rec_address}}</td>
                  <td>{{$data->phone}}</td>
                  <td>{{$data->product->title}}</td>
                  <td>{{$data->product->price}}</td>
                  <td>
                    <img width="150" src="products/{{$data->product->image}}">
                  </td>
                  <td>
                    @if($data->status == 'in progress')
                      <span style="color:red;">{{ strtolower($data->status) }}</span>
                    @elseif($data->status == 'on the way')
                      <span style="color:skyblue;">{{ strtolower($data->status) }}</span>
                    @else
                      <span style="color:yellow;">{{ strtolower($data->status) }}</span>
                    @endif
                  </td>
                  <td class="nowrap">
                    <a class="btn btn-primary" href="{{url('on_the_way', $data->id)}}">On the Way</a>
                    <a class="btn btn-success" href="{{url('delivered', $data->id)}}">Delivered</a>
                  </td>
                  <td>
                    <a class="btn btn-secondary" href="{{url('print_pdf',$data->id)}}">PDF</a>
                  </td>

                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>