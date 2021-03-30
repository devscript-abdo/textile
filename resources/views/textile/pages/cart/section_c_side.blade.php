<aside class="col-lg-3">
    <div class="summary summary-cart">
        <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

        <table class="table table-summary">
            <tbody>
            <tr class="summary-subtotal">
                <td>Subtotal:</td>
                <td>$160.00</td>
            </tr><!-- End .summary-subtotal -->
            <tr class="summary-shipping">
                <td>Shipping:</td>
                <td>&nbsp;</td>
            </tr>

            <tr class="summary-shipping-row">
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                        <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                    </div><!-- End .custom-control -->
                </td>
                <td>$0.00</td>
            </tr><!-- End .summary-shipping-row -->

            <tr class="summary-shipping-row">
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                        <label class="custom-control-label" for="standart-shipping">Standart:</label>
                    </div><!-- End .custom-control -->
                </td>
                <td>$10.00</td>
            </tr><!-- End .summary-shipping-row -->

            <tr class="summary-shipping-row">
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                        <label class="custom-control-label" for="express-shipping">Express:</label>
                    </div><!-- End .custom-control -->
                </td>
                <td>$20.00</td>
            </tr><!-- End .summary-shipping-row -->

            <tr class="summary-shipping-estimate">
                <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                <td>&nbsp;</td>
            </tr><!-- End .summary-shipping-estimate -->

            <tr class="summary-total">
                <td>Total:</td>
                <td>{{$total}}</td>
            </tr><!-- End .summary-total -->
            </tbody>
        </table><!-- End .table table-summary -->

        <a href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
    </div><!-- End .summary -->

    <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
</aside><!-- End .col-lg-3 -->
