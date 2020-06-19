@extends("frontend.layout")
@section("content")
    <body style="font-family: 'Roboto', sans-serif;">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="cozy-logo col-lg-12" style="text-align: center;background-color:#f5f5f5">
                        <h1>COZY TEA THANKS YOU</h1>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="mid col-lg-12" style="padding-top:10px;padding-bottom:50px">
                        <h5><b>THÔNG TIN ĐƠN HÀNG - DÀNH CHO NGƯỜI MUA</b></h5>
                        <p>Mã đơn hàng: <a href="#">#2005157A2323</a></p>
                        <p>Người bán: <a href="#">Thanh Tuấn</a></p>
                        <div class="mid-product col-lg-12">
                            <div class="row">
                                <div class="img-product col-lg-3">
                                    <img src="anh1.jpg" style="width:200px;height: 150px">
                                </div>
                                <div class="text-product col-lg-9">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">TT</th>
                                            <th scope="col">Tên Sản Phẩm</th>
                                            <th scope="col">Số Lượng</th>
                                            <th scope="col">Số tiền</th>
                                            <th scope="col">Tổng tiền</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Chuột fuhlen L102 kèm miếng lót chuột độ bám cực tốt</td>
                                            <td>1</td>
                                            <td>120.000</td>
                                            <td>120.000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-success" style="float: right">Track your shipping</button>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <footer>
            <hr class="my-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="bot col-lg-12" style="padding-top:10px;text-align: center;">
                        <h5><b>CẢM ƠN BẠN ĐÃ MUA HÀNG Ở SHOP CỦA CHÚNG TÔI KÍNH MONG ĐƯỢC PHỤC VỤ LẠI BẠN Ở LẦN SAU</b></h5>
                        <p> Bạn không hài lòng về sản phẩm hoặc thật ra chưa nhận được hàng? Vui lòng liên hệ tổng đài
                            CSKH 19009999 trong vòng 3 ngày kể từ khi nhận được email này để được hỗ trợ.
                        </p>
                        <p>
                            Lưu ý: Cozy Tea sẽ từ chối hỗ trợ các khiếu nại về mặt hàng lỗi sau 24 giờ kể từ khi nhận hàng
                            và
                            các khiếu nại</br>
                            vì lý do khác của đơn hàng sau 3 ngày. Tìm hiểu thêm về chính sách trả hàng/Hoàn tiền của chúng
                            tại <a href="#">đây</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
@endsection

