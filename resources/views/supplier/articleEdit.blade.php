<script type="text/javascript">

tinymce.init({
  selector: "textarea",

  // ===========================================
  // INCLUDE THE PLUGIN
  // ===========================================

  plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table contextmenu paste jbimages"
  ],

  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================

  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

  // ===========================================
  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
  // ===========================================

  relative_urls: false

});

</script>
<!-- /TinyMCE -->@extends('supplier/default')

@section('content')
    <div class="row">
        <div class ="container">
            <form method="POST" action="{{ \URL::current() }}" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" id="title" name="title" class="form-control" placeholder="Title of Article" value="{{$article['title']}}" maxlength="50"><BR/>
                <textarea id="content" name="content" rows="15">{{$article['content']}}</textarea>
                <div class="text-right">
                    <button class="btn-info">Edit article</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('js-additions')
    <script src="{{ asset('/js/global/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste jbimages"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            relative_urls: false
        });
    </script>



@stop