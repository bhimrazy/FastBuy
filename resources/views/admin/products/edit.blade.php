@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form role="form" enctype="multipart/form-data" action="{{route("admin.products.update", [$product->id])}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Product : {{$product->name}}</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{old('name',$product->name)}}" required>
                                    @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Product Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="4" required>{{old('description',$product->description)}}</textarea>
                                    @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="attributes">Product Attributes</label>
                                    <textarea id="attributes" name="attributes" class="attributes form-control" rows="6" required>{{old('attributes',$product->attributes)}}</textarea>
                                    @error('attributes')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" id="price" class="form-control" value="{{old('price',$product->price)}}" required>
                                    @error('price')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="inputCategory">Categories</label>
                                    <select id="inputCategory" name="subcategory_id" class="form-control custom-select" required>
                                        <option selected disabled>Select one subcategory</option>
                                        @foreach($categories as $category)
                                            <option class="text-bold text-gray-dark" disabled>{{$category->title}}</option>
                                            @foreach($category->subcategories as $subcategory)
                                                <option class="badge text-success" value="{{$subcategory->id}}" {{ $subcategory->id==old('subcategory_id',$product->subcategory_id) ? 'selected' : '' }}>{{$subcategory->title}}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                    @error('subcategory_id')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    @foreach($tags as $tag)
                                        <div class="icheck-primary custom-control custom-checkbox">
                                            <input type="checkbox" name="tags[]" id="checkboxPrimary1{{$tag->id}}" value="{{$tag->id}}" {{ (in_array($tag->id, old('tags', [])) || $product->tags->contains($tag->id)) ? 'checked' : '' }}>
                                            <label for="checkboxPrimary1{{$tag->id}}">{{$tag->title}}
                                            </label>
                                        </div>
                                    @endforeach
                                    @error('tags')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Product Images</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div id="product-img">
                                        @foreach($product->media as $image)
                                            <img src="{{asset($image->url)}}" alt="{{$product->name}}" width="auto" height="100px">
                                        @endforeach
                                    </div>
                                    <div class="custom-file">
                                        <label class="control-label">Product Images</label>
                                        <input class="form-control p-1" id="fileToUpload" type="file" name="image[]" onchange="load(event,'product-img')" accept=".png, .jpg, .jpeg" multiple>
                                    </div>
                                    <small>Max size 1MB.</small>
                                    @error('image')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Product Info</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="sku">SKU</label>
                                    <input type="text" name="sku" id="sku" class="form-control" value="{{old('sku',$product->sku)}}" required>
                                    @error('sku')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="discount">Discount</label>
                                    <input type="number" name="discount" id="discount" class="form-control" value="{{old('discount',$product->discount)}}" required>
                                    @error('discount')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" name="quantity" id="quantity" class="form-control" value="{{old('quantity',$product->quantity)}}" required>
                                    @error('quantity')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tags">Featured and Status</label>
                                    <div class="icheck-primary custom-control custom-checkbox">
                                        <input type="checkbox" name="featured" id="checkboxPrimary1featured" {{old('featured',$product->featured)?'checked':''}}>
                                        <label for="checkboxPrimary1featured">Featured</label>
                                    </div>
                                    @error('featured')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    <div class="icheck-primary custom-control custom-checkbox">
                                        <input type="checkbox" name="status" id="checkboxPrimary1status" {{old('status',$product->status)?'checked':''}}>
                                        <label for="checkboxPrimary1status">Status(Active)</label>
                                    </div>
                                    @error('status')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputCategory">Stock</label>
                                    <div class="icheck-primary custom-control custom-checkbox">
                                        <input type="checkbox" name="stock" id="checkboxPrimary1stock" {{old('stock',$product->stock)?'checked':''}}>
                                        <label for="checkboxPrimary1stock">Stock</label>
                                    </div>
                                    @error('stock')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputCategory">Brand</label>
                                    <select id="inputCategory" name="brand_id" class="form-control custom-select" required>
                                        <option selected disabled>Select a Brand</option>
                                        @foreach($brands as $brand)
                                            <option class="text-bold text-gray-dark" value="{{$brand->id}}" {{$brand->id==old('brand_id',$product->brand_id)?'selected':''}}>{{$brand->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="product_type">Product Type</label>
                                    <input type="text" name="product_type" id="product_type" class="form-control" value="{{old('product_type',$product->product_type)}}" required>
                                    @error('product_type')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="submit" value="Update Product" class="btn btn-success float-right">
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script>
        load= function(event,id) {
            document.getElementById(id).innerHTML='Preview <br>';
            var files=event.target.files;
            if(files.length<=4){
                for (let i = 0; i < files.length; i++) {
                    var img = document.createElement('IMG');
                    img.id = i;
                    img.className='p-1'
                    img.src =URL.createObjectURL(files[i]);
                    img.setAttribute('height', '100px');
                    img.setAttribute('width', 'auto');
                    document.getElementById(id).appendChild(img);
                }
            }else{
                document.getElementById(id).innerHTML='<small class="text-danger">File Limit Exceeded</small>';
                document.getElementById('fileToUpload').value=null;
            }
        };
    </script>
@endsection
