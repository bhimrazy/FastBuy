<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form action="{{route('products.search')}}" class="hm-searchbox" style="z-index: 10" method="post">
        @csrf
        <select name="category_id" class="nice-select select-search-category">
            <option selected disabled  value="">All categories</option>
            @foreach(\App\Category::with('subcategories')->get() as $category)
                <option disabled>&nbsp;{{$category->title}}</option>
                @foreach($category->subcategories as $subcategory)
                    <option value="{{$subcategory->id}}">&nbsp;&nbsp;&nbsp;&nbsp;{{$subcategory->title}}</option>
                @endforeach
            @endforeach
        </select>
        <input name="query" type="text" wire:model.debounce.500ms="search" placeholder="{{$search??'Enter your search key ...'}}" required>
        <button class="fb-search_btn" type="submit"><i class="fa fa-search"></i></button>
    </form><br>
    @if(count($searchProducts)>0)
        <div class="position-relative category-menu col-6 ml-150" style="z-index: 8;background-color: #232f3e;">
            <div class="category-menu-list" >
                <ul class="mt-20" style="height: 0">
                    @foreach($searchProducts as $product)
                        <li class="border-bottom p-2 py-3 m-auto ">
                            <a href="{{route('product.productShow',['product'=>$product['slug']])}}">
                                <img class="left" src="{{asset($product->media->first()->url)}}" loading="lazy" width="40px" height="auto" alt="{{$product->name}}">
                                <span class="ml-100 right text-wrap">{{Str::limit($product['name'],35)}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>
