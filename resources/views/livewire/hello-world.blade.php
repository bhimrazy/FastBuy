<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form action="{{route('products.search')}}" class="hm-searchbox" style="z-index: 7" method="post">
        @csrf
        <select name="category_id" class="nice-select select-search-category">
            <option selected disabled>All categories</option>
            @foreach(\App\Category::with('subcategories')->get() as $category)
                <option disabled>&nbsp;{{$category->title}}</option>
                @foreach($category->subcategories as $subcategory)
                    <option value="{{$subcategory->id}}">&nbsp;&nbsp;&nbsp;&nbsp;{{$subcategory->title}}</option>
                @endforeach
            @endforeach
        </select>
        <input name="query" type="text" wire:model.debounce.500ms="search" placeholder="{{$query??'Enter your search key ...'}}" required>
        <button class="fb-search_btn" type="submit"><i class="fa fa-search"></i></button>
    </form><br>
@if(count($searchProducts)>0)
        <div class="position-relative category-menu col-6 ml-150 mt-10 rounded" style="z-index: 6;background-color: #232f3e">
            <div id="cate-toggle" class="category-menu-list" >
                <ul>
                    @foreach($searchProducts as $product)
                        <li><a href="{{route('product.productShow',['product'=>$product['slug']])}}"><span><img src="{{asset('assets/images/category-thumb/6.jpg')}}" alt="Category-thumb"></span>{{$product['name']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>
