<form class="form form-vertical" action="/admin/slider/{{ $slider->id }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <input type="hidden" value="{{ $slider->id }}" name="id">
    <div class="form-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">صورة العرض الاولى 825</label>
                    <input type="file" class="form-control @error('ad_1_825') is-invalid @enderror"
                        name="ad_1_825">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">العنوان الاول</label>
                    <input type="text" class="form-control @error('heading_1') is-invalid @enderror"
                        name="heading_1" placeholder="العنوان الاول" value="{{ old('heading_1' , $slider->heading_1) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">العنوان الثانوي الاول</label>
                    <input type="text" class="form-control @error('sub_heading_1') is-invalid @enderror"
                        name="sub_heading_1" placeholder="العنوان الاول" value="{{ old('sub_heading_1', $slider->sub_heading_1) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">الوصف الاول</label>
                    <input type="text" class="form-control @error('description_1') is-invalid @enderror"
                        name="description_1" placeholder="الوصف الاول" value="{{ old('description_1', $slider->description_1) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">صورة العرض الثانية 825</label>
                    <input type="file" class="form-control @error('ad_2_825') is-invalid @enderror"
                        name="ad_2_825">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">العنوان الثاني</label>
                    <input type="text" class="form-control @error('heading_2') is-invalid @enderror"
                        name="heading_2" placeholder="العنوان الثاني" value="{{ old('heading_2', $slider->heading_2) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">العنوان الثانوي الثاني</label>
                    <input type="text" class="form-control @error('sub_heading_2') is-invalid @enderror"
                        name="sub_heading_2" placeholder="العنوان الثانوي الثاني" value="{{ old('sub_heading_2', $slider->sub_heading_2) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">الوصف الثاني</label>
                    <input type="text" class="form-control @error('description_2') is-invalid @enderror"
                        name="description_2" placeholder="الوصف الثاني" value="{{ old('description_2', $slider->description_2) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">صورة العرض الثالثة 825</label>
                    <input type="file" class="form-control @error('ad_3_825') is-invalid @enderror"
                        name="ad_3_825">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">العنوان الثالث</label>
                    <input type="text" class="form-control @error('heading_3') is-invalid @enderror"
                        name="heading_3" placeholder="العنوان الثاني" value="{{ old('heading_3', $slider->heading_3) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">العنوان الثانوي الثالث</label>
                    <input type="text" class="form-control @error('sub_heading_3') is-invalid @enderror"
                        name="sub_heading_3" placeholder="العنوان الثانوي الثالث" value="{{ old('sub_heading_3', $slider->sub_heading_3) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">الوصف الثالث</label>
                    <input type="text" class="form-control @error('description_3') is-invalid @enderror"
                        name="description_3" placeholder="الوصف الثالث" value="{{ old('description_3', $slider->description_3) }}" required>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success mr-1 mb-1">تعديل</button>
            </div>
        </div>
    </div>
</form>
