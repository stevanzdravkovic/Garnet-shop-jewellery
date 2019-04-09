<div class="container">
    <div class="row">


        <br/>



        <form action="{{route('doInsertSlider')}}" enctype="multipart/form-data" method='post' class="col-xs-12 col-sm-12 col-md-12" >
            {{csrf_field()}}
            <h2>Please insert new image for slider</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="imgDescription" placeholder="Enter image description" name="imgDescription" required>
            </div>

            <div class="form-group">
                <input type="file"  id="sliderImage" name="sliderImage"   class="form-control-file" required >

            </div>


            <br/><br/>


            <button type="submit" class="btn btn-success">Insert <i class="glyphicon glyphicon-send"></i></button>
        </form>
    </div>
    <br/><br/><br/><br/>
</div>
@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session()->get('message') }}
    </div>
@endif