
   
    <div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Subscribe</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5">

        <!-- Form -->
    <form class="text-center" style="color: #757575;" action="{{route('update',$book->id)}}" method="POST">
            @csrf

            @method('PUT')

            <p>edit page</p>


            <!-- Name -->
            <div class="md-form mt-3">
            <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="name" value="{{$book->name}}">
                <label for="materialSubscriptionFormPasswords">name</label>
            </div>

            <!-- E-mai -->
            <div class="md-form mt-3">
            <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="subject" value="{{$book->subject}}">
                <label for="materialSubscriptionFormPasswords">subject</label>
            </div>

            <div class="md-form mt-3">
            <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="writer" value="{{$book->writer}}">
                <label for="materialSubscriptionFormPasswords">writer</label>
            </div>

            {{-- <div class="md-form mt-3">
                <input type="file" id="photo_name" class="form-control" name="photo_name">
                <label for="photo_name">upload img</label>
               
            </div> --}}

            <!-- Sign in button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">edit</button>

        </form> 
        <!-- Form -->

     </div>

    </div>
