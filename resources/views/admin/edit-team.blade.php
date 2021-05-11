@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Edit team member details</h2>
<form action="{{ URL::to('ourteam/' . $data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="text" name="name" class="form-control" value="{{$data->name}}" />
      <div class="validate"></div>
    </div>
    <div class="form-group col-md-6">
    <input type="text" class="form-control" name="job" value="{{$data->job}}" />
      <div class="validate"></div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-8">
        <label class="col-md-4 text-right">Select Profile Image</label>
     <input type="file" name="image" />
           <img src="{{ URL::to('/') }}/image/{{ $data->image }}" class="img-thumbnail" width="100" />
                     <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
                    </div>
                     </div>
  <div class="form-group">
  <textarea class="form-control" maxlength="250" name="experience" rows="5" placeholder="Experience">{{$data->experience}}</textarea>
  </div>
  <div class="form-group">
  <textarea class="form-control" name="description" rows="5" placeholder="Description">{{$data->description}}</textarea>
  </div>
  <input type="submit" align="center" value="Upload" class="btn btn-success">
  <a href="{{url('ourteam')}}" class="btn btn-danger">Cancel</a>
</form>
</div>
@endsection