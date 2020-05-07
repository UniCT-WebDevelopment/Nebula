    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/flickity.pkgd.js')}}"></script>
    <script src="{{url('assets/js/flickityControl.js')}}"></script>
    <script src="{{url('assets/js/searchbar.js')}}"></script>
    <script>
        $(document).ready(function () {

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
    $('.cardGame').toggleClass('col-4 col-12');
    $('.cardGame').toggleClass('col-md-6 col-md-5 ');
    $('.cardGame').toggleClass('col-lg-4 col-lg-3 ');
});
});
</script>
