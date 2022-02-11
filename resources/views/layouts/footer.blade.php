<!-- footer start-->
 <!-- Footer -->
  <footer class="sticky-footer bg-white">
      <div class="container my-auto">
          <div class="copyright text-center my-auto">
              <span> &copy;
                  <script> document.write(new Date().getFullYear()); </script>
                  <b><a href="#" target="_blank">Master Online Community</a></b>
              </span>
          </div>
      </div>
  </footer>
</div>
</div>
<!-- versi 1 -->
<!-- latest jquery-->
<script src="{{asset('/assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('/assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap/bootstrap.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('/assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('/assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <script src="{{asset ('/assets/js/datepicker/date-picker/datepicker.js') }}"></script>

    <script src="{{ asset('/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <!-- Theme js-->
    <script src="{{asset('/assets/js/script.js')}}"></script>
    <!-- login js-->
<!-- Plugin used-->
<!-- datatable -->
<script src="{{asset('/assets/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/assets/datatable/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/assets/datatable/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/assets/datatable/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- end v1-->

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('js/ruang-admin.min.js')}}"></script>


@yield('footer')

    <script>
      $(document).ready(function () {
      $('.according-menu').hide();
  });
    </script>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
</body>
</html>
