<table class="table">

  <thead>
    <tr>
     
      <th scope="col">CategoryCode</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($categories as $category)
    <tr>
      <td>{{ $category->CategoryCode }}</td>
                            <td>{{ $category->Description }}</td>
                      
                           
                            <td><a class="btn btn-primary mr-md-2"
                                    href="{{ url('/edit-category/' . $category->id) }}">Edit</a>
                            </td>
    </tr>
    @endforeach
  </tbody>
</table>