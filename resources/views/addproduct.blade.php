<div>
            <h1 class="mb-4 mt-4">Add product</h1>
        </div>

        <form class="row g-3" method="post" action="{{ url('/add-new') }}">
            {{ csrf_field() }}

            <div class="col-md-6">
                <label for="ProductName" class="form-label">Product Name</label>
                <input type="text" name="ProductName" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="productcode" class="form-label">Product Code</label>
                <input type="text" name="ProductCode" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="Category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->id }}
                    @endforeach
                    </option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="Description" placeholder="....">
            </div>
            <div class="col-12">
                <label for="color" class="form-label">Color</label>
                <input type="text" name="Color" class="form-control" placeholder="Color">
            </div>
            <div class="col-md-6">
                <label for="size" class="form-label">Size</label>
                <input type="text" name="Size" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="Price" class="form-control">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" href="{{ url('/add-product') }}">Add</button>
                <a href="{{url()->previous()}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
        </div>