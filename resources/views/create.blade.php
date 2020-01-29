@extends('layouts.main')

@section('content')

   <!-- Material form subscription -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Subscribe</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5">

        <!-- Form -->
    <form class="text-center" style="color: #757575;" action="{{route('store')}}" method="POST"  enctype="multipart/form-data">
            @csrf

            <p>inter your favorit book</p>

            <p>
                <a href="" target="_blank">See the last newsletter</a>
            </p>

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="name">
                <label for="materialSubscriptionFormPasswords">name</label>
            </div>

            <!-- E-mai -->
            <div class="md-form mt-3">
                <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="subject">
                <label for="materialSubscriptionFormPasswords">subject</label>
            </div>

            <div class="md-form mt-3">
                <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="writer">
                <label for="materialSubscriptionFormPasswords">writer</label>
            </div>

            <div class="md-form mt-3">
                <input type="file" id="photo_name" class="form-control" name="photo_name">
                <label for="photo_name">upload img</label>
               
            </div>
 
            <!-- Sign in button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">send</button>

        </form>
        <!-- Form -->

    </div>

</div>

@endsection





{{-- <div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
      </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="inputGroupFile01"
        aria-describedby="inputGroupFileAddon01" name="photo_name">
      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div>
</div> --}}