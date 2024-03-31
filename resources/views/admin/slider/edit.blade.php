@extends('admin.layout.app')

@section('heading', 'Sliders')

@section('main_content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1 class="text-primary">Edit Slider</h1>
            <div>
                <a href="{{ route('admin_slider_edit_submit', $slider->id) }}" class="btn btn-primary">Add New</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('admin_slider_edit_submit', ['id' => $slider->id]) }}"  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="heading" value="{{ $slider->heading }}">
                                </div>                                   
                                    
                                <div class="form-group mb-3">
                                    <label>Text</label>
                                    <textarea class="form-control editor" cols="30" rows="20" name="text">{{ $slider->text }}</textarea>
                                </div>
                                   
                                <div class="form-group mb-3">
                                    <label>Button Text</label>
                                    <input class="form-control" name="button_text" value="{{ $slider->button_text }}">
                                </div>
                                        
                                <div class="form-group mb-3">
                                    <label>Button Link</label>
                                    <input class="form-control" name="button_link" value="{{ $slider->button_link }}">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'. $slider->photo) }}" alt="" class="w_200">
                                    </div>
                                </div>   
                                <div class="form-group mb-3">
                                    <label>New Photo</label>
                                    <div>
                                        <input type="file" name="photo">
                                    </div>
                                </div>                        
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection