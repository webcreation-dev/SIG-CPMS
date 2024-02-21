<!-- footer start-->
<footer class="codex-footer">
    <p>Copyright 2024 © Lynia Express Delivery | Réalisé par <a target="_blank" href="https://webcreation-dev.github.io/">WEBCREATION</a></p>
  </footer>
<!-- footer end-->
<!-- back to top start //-->
  <div class="scroll-top"><i class="fa fa-angle-double-up"></i></div>
<!-- back to top end //-->

  <!-- main jquery-->
  <script src="{{asset('assets/js/jquery-3.6.0.js')}}"></script>
  <!-- Theme Customizer-->
  <script src="{{asset('assets/js/layout-storage.js')}}"></script>
  <script src="{{asset('assets/js/customizer.js')}}"></script>
  <!-- Feather icons js-->
  <script src="{{asset('assets/js/icons/feather-icon/feather.js')}}"></script>
  <!-- Bootstrap js-->
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Scrollbar-->
  <script src="{{asset('assets/js/vendors/simplebar.js')}}"></script>
  <!-- apex chart-->
  <script src="{{asset('assets/js/vendors/chart/apexcharts.js')}}"></script>
  <!-- dashboard-->
  <script src="{{asset('assets/js/dashboard/dashboard.js')}}"></script>
  <!-- select 2 js-->
  <script src="{{asset('assets/js/vendors/select2/select2.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/select2/custom-select2.js')}}"> </script>
  <!-- Datatable-->
  <script src="{{asset('assets/js/vendors/datatable/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/datatable/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/datatable/buttons.print.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/datatable/jszip.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/datatable/pdfmake.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/datatable/vfs_fonts.js')}}"></script>
  <script src="{{asset('assets/js/vendors/datatable/buttons.html5.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/datatable/custom-datatable.js')}}"></script>
  <!-- Custom script-->
  <script src="{{asset('assets/js/custom-script.js')}}"></script>
  <!-- ckeditor  -->
  <script src="{{asset('assets/js/vendors/ckeditor/ckeditor.js')}}"> </script>
  <!-- Dropzone-->
  <script src="{{asset('assets/js/vendors/dropzone/dropzone.js')}}"></script>
  <script src="{{asset('assets/js/vendors/dropzone/dropzone-custom.js')}}"></script>
  <!-- slick slider-->
  <script src="{{asset('assets/js/vendors/slider/slick-sldier/slick.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/slider/slick-sldier/slick-custom.js')}}"></script>
  <!-- ion range slider-->
  <script src="{{asset('assets/js/vendors/range-slider/ion-rangeslider.js')}}"></script>
  <script src="{{asset('assets/js/vendors/range-slider/custom-rangeslider.js')}}"></script>

  <!-- sweetalert js-->
  <script src="{{asset('assets/js/vendors/sweetalert/sweetalert2.js')}}"></script>
  <script src="{{asset('assets/js/vendors/sweetalert/custom-sweetalert2.js')}}"></script>

  <script>
    ClassicEditor
      .create( document.querySelector( '#crowenkeditor' ), {
          toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
          heading: {
              options: [
                  { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                  { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                  { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
              ]
          }
      } )
      .catch( error => {
          console.log( error );
      } );
  </script>

    <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
    </script>
