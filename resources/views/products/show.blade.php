@extends('../layouts/app')
@section('styles')
    
     <link rel="stylesheet" href="{{asset('assets/packages/data/datatables.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
          <form class="needs-validation" id="userDesc">
              <div class="form-row">
                <div class="col-md-3 mb-3">
                  <label for="validationTooltip05">Product Description:</label>
                  <input type="text" class="form-control desc" id="validationTooltip05" placeholder="please enter your Product description " required>
                  <input type="hidden" value="{{Auth::user()->id}}" class='user_id'   >
                  <div class="invalid-tooltip">
                      </div>
                </div>
              </div>
              <button class="btn btn-primary mb-5" type="submit">save</button>
            </form>
      </div>
  </div>

<div class="container">
    <table class="table table-bordered" id="datatables">
        <thead>
          <tr>
              <th scope="col">Description</th>
              <th scope="col">created_at</th>
              <th scope="col">id</th>
          </tr>
        </thead>
        <tbody >
           
        </tbody>
      </table>
@endsection

@section('scripts')
     <script src="{{asset('assets/packages/data/datatables.js')}}"></script>
     <script src="{{asset('assets/packages/data/Buttons-2.3.6/js/buttons.print.js')}}"></script>
     <script src="{{asset('assets/packages/data/Buttons-2.3.6/js/buttons.html5.js')}}"></script>
     <script src="{{asset('assets/packages/data/Buttons-2.3.6/js/dataTables.buttons.js')}}"></script>
     <script src="{{asset('assets/packages/data/pdfmake-0.1.36/pdfmake.js')}}"></script>
     <script src="{{asset('assets/packages/data/pdfmake-0.1.36/vfs_fonts.js')}}"></script>
     <script src="{{asset('assets/packages/data/JSZip-2.5.0/jszip.js')}}"></script>
     <script src="{{asset('assets/packages/data/RowGroup-1.3.1/js/dataTables.rowGroup.js')}}"></script>
     <script src="{{asset("assets/js/product.js")}}"></script>
@endsection