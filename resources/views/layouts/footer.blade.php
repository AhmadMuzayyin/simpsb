<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Logout</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ url('home/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('home/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ url('home/js/sb-admin-2.min.js') }}"></script>
<script src="{{ url('home/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('home/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
