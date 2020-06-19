<script src="{{asset("assets/vendor/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/vendor/js-cookie/js.cookie.js")}}"></script>
<script src="{{asset("assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js")}}"></script>
<script src="{{asset("assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js")}}"></script>
<!-- Optional JS -->
<script src="{{asset("assets/vendor/chart.js/dist/Chart.min.js")}}"></script>
<script src="{{asset("assets/vendor/chart.js/dist/Chart.extension.js")}}"></script>
<!-- Argon JS -->
<script src="{{asset("assets/js/argon.js?v=1.2.0")}}"></script>
<script type="text/javascript">
    function addToCart(productId) {
        $.ajax({
            url:"{{url("/cart/add/")}}"+productId,
            method:"POST",
            data:{
                qty:1,
                _token:"{{csrf_token()}}"
            },
            success: function () {
                alert("Mua sản phẩm thành công!");
            }
        });
    }
</script>
