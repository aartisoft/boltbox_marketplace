<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Checkout</title>
</head>
<body>
<link href="style.css" type="text/css" rel="stylesheet" />
<h1 class="bt_title">Braintree Custom Integration</h1>
<div class="dropin-page">
  <form id="checkout" method="post" action="">
    <h4 class="bt_title">Customer Information</h4>
    <input type="hidden" name="invoiceid" value="123456">
     <fieldset class="one_off_firstname">
      <label class="input-label" for="firstname">
      <span class="field-name">First Name</span>
      <input id="c_firstname" name="c_firstname" class="input-field card-field" type="text" placeholder="First Name" autocomplete="off">
      <div class="invalid-bottom-bar"></div>
      </label>
    </fieldset>
    <fieldset class="one_off_lastname">
      <label class="input-label" for="lastname">
      <span class="field-name">Last Name</span>
      <input id="c_lastname" name="c_lastname" class="input-field card-field" type="text" placeholder="Last Name" autocomplete="off">
      <div class="invalid-bottom-bar"></div>
      </label>
    </fieldset>
    
    <fieldset class="one_off_amount">
      <label class="input-label" for="amount">
      <span class="field-name">invoiceid</span>
      <input id="amount" name="invoiceid" class="input-field card-field" type="text" inputmode="numeric" placeholder="Amount" autocomplete="off" step="any">
      <input  name="payment_method_nonce" value="tokencc_bf_tkr52v_ndz8t8_tr3chk_wnzkr2_9c7" type="hidden">
      <div class="invalid-bottom-bar"></div>
      </label>
    </fieldset>

          <fieldset class="one_off_amount">
      <label class="input-label" for="amount">
      <span class="field-name">Amount</span>
      <input id="amount" name="amount" class="input-field card-field" type="number" inputmode="numeric" placeholder="Amount" autocomplete="off" step="any">
      <div class="invalid-bottom-bar"></div>
      </label>
    </fieldset>
    <div class="btn_container">
      <input type="submit" name="make_payment" value="Make Payment" class="pay-btn">
      <span class="loader_img"></span> </div>
  </form>
</div>
</body>
</html>