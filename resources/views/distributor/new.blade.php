@extends("layout")
@section("title", "New Distributor Listing")
@section("contentHeader", "New Distributor")
@section("content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("/save-distributor")}}" method="post"  enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Distributor Name</label>
                    <input type="text" name="distributor_name" class="form-control @error("distributor_name")  is-invalid @enderror" placeholder="New Distributor">
                    @error("distributor_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Distributor Address</label>
                    <input type="text" name="address" class="form-control @error("address")  is-invalid @enderror" placeholder="Address">
                    @error("address")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Telephone</label>
                    <input type="text" name="telephone" class="form-control @error("telephone")  is-invalid @enderror" placeholder="Telephone">
                    @error("telephone")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" name="logo" class="form-control" placeholder="New Distributor Logo">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
