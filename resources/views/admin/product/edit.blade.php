<form class="form form-vertical" action="/admin/product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <input type="hidden" value="{{ $product->id }}" name="id">
    <div class="form-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">الاسم الانجليزي</label>
                    <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                        name="name_en" placeholder="الاسم الانجليزي" value="{{ old('name_en' ,$product->name_en) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">الاسم العربي</label>
                    <input type="text" class="form-control @error('name_ar') is-invalid @enderror"
                        name="name_ar" placeholder="الاسم العربي" value="{{ old('name_ar' , $product->name_ar) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">نوع المنتج</label>
                    <select name="type_id" class="form-control" required>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" @selected(old('type_id', $product->type_id) == $type->id)>
                                {{ $type->name_ar }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">فئة المنتج</label>
                    <select name="category_id" class="form-control" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id) == $category->id)>
                                {{ $category->name_ar }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">فئة المنتج</label>
                    <select name="manfacturer_id" class="form-control" required>
                        @foreach ($manfacturers as $manfacturer)
                            <option value="{{ $manfacturer->id }}" @selected(old('manfacturer_id', $product->manfacturer_id) == $manfacturer->id)>
                                {{ $manfacturer->name_ar }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="first-name-vertical">الوصف العربي</label>
                    <input type="textarea" class="form-control @error('description_ar') is-invalid @enderror"
                        name="description_ar" placeholder="الوصف العربي" value="{{ old('description_ar', $product->description_ar) }}" required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="first-name-vertical">الوصف الانجليزي</label>
                    <input type="textarea" class="form-control @error('description_en') is-invalid @enderror"
                        name="description_en" placeholder="الوصف الانجليزي" value="{{ old('description_en', $product->description_en) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">صورة المنتج</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror"
                        name="photo" placeholder="صورة المنتج" value="{{ old('photo', $product->photo) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">الكمية</label>
                    <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                        name="quantity" placeholder="الكمية" value="{{ old('quantity', $product->quantity) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">السعر</label>
                    <input type= "number"step="0.01" min="0" max="10" class="form-control @error('price') is-invalid @enderror"
                        name="price" placeholder="السعر" value="{{ old('price', $product->price) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">حاله المنتج</label>
                    <select name="is_available" class="form-control" required>
                        <option value="1" @selected(old('is_available', $product->is_available) == 1)>متوفر</option>
                        <option value="0" @selected(old('is_available', $product->is_available) == 0)>غير متوفر</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success mr-1 mb-1">تعديل</button>
            </div>
        </div>
    </div>
</form>
