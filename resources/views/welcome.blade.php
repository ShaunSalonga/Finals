<table class="table">

  <thead>
    <tr>
     
      <th scope="col">ProductName</th>
      <th scope="col">ProductCode</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Color</th>
      <th scope="col">Size</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($products as $product)
    <tr>
      <td>{{ $product->ProductName }}</td>
                            <td>{{ $product->ProductCode }}</td>
                            <td>{{ $product->category->CategoryCode ?? 'No Category' }}</td>
                            <td>{{ $product->Description }}</td>
                            <td>{{ $product->Color }}</td>
                            <td>{{ $product->Size }}</td>
                            <td>{{ $product->Price }}</td>
                            <td><a class="btn btn-primary mr-md-2"
                                    href="{{ url('/edit/' . $product->id) }}">Edit</a>

                            </td>
                            <td><a class="btn btn-primary mr-md-2"
                                    href="{{ url('/delete/' . $product->id) }}">Delete</a>
                                    
                            </td>
    </tr>
    @endforeach
  </tbody>
</table>
<td><a class="btn btn-primary mr-md-2"
                                    href="{{ url('/add')}}">Add</a>
                                    
                            </td>