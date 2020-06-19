
<script src="{{asset("assets/js/vendor/jquery-1.12.0.min.js")}}" ></script>
<script src="{{asset("assets/js/popper.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/imagesloaded.pkgd.min.js")}}"}}></script>
<script src="{{asset("assets/js/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("assets/js/ajax-mail.js")}}"></script>
<script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/js/plugins.js")}}"></script>
<script src="{{asset("assets/js/main.js")}}"></script>
<script src="{{asset("assets/js/search.js")}}"></script>
<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ \Illuminate\Support\Facades\URL::to('search') }}',
            data: {
                'search': $value
            },
            success:function(data){
                if($value===""){
                    return $('tbody').html("");
                }else{
                    return $('tbody').html(data);
                }
            }
        });
    });
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    $(".search").bind("click",function (){
        $(".table__search").css('display', 'block' );
    });
    $(".slider-area").bind("click",function (){
        $(".table__search").css('display', 'none');
    });
</script>
<script type="text/javascript">
    function addToCart(productId) {
        $.ajax({
            url:"{{url("/cart/add")}}/"+productId,
            method: "POST",
            data: {
                qty:1,
                _token:"{{@csrf_token()}}"
            },
            success: function () {
                alertify.success("Add product to cart successfully");
            }
        });
    }
</script>

