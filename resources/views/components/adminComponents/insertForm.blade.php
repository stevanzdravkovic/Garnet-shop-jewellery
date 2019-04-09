<div class="container">
    <div class="row">


        <br/>



        <form action="{{route('do-insert')}}" enctype="multipart/form-data" method='post' class="col-xs-12 col-sm-12 col-md-12" >
            {{csrf_field()}}
            <h2>Please insert new product</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="ProductName" placeholder="Enter Product Name" name="ProductName" required>
            </div>

            <div class="form-group">
                <input type="number" class="form-control" id="productPrice" placeholder="Enter Product price" name="productPrice" required>
            </div>

            <div class="form-group">
                <input type="file"  id="productImage" name="productImage"   class="form-control-file" required>

            </div>



            <div class="form-group">


                <select class="form-control"  name="productCategory" id="productCategory" required>
                    <option value="0">Choose product </option>
                    <option value="1">Necklaces</option>
                    <option value="2">Earrings</option>
                    <option value="3">Rings</option>
                </select>

            </div>




            <br/>


            <button type="submit" class="btn btn-success">Insert <i class="glyphicon glyphicon-send"></i></button>
        </form>
    </div>
</div>
@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session()->get('message') }}
    </div>
@endif