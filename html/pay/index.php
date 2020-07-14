<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php"); ?>

<section class="page-heading">
  <div class="grid-container">
    <div class="cell">
      <h1 class="title">Pay online, easily.</h1>
    </div>
  </div>
</section>

<article class="page">
  <div class="grid-container text-center">
    <div class="grid-x">
      <div class="cell align-center large-6">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payment_form_id">
          <input type="hidden" name="cmd" value="_xclick">
          <input type="hidden" name="business" value="sales@upheavaldesign.com">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="bn" value="PP-BuyNowBF">
          <input type="hidden" name="item_name" value="Online Payment">
          <input type="hidden" name="cancel_return" value="http://www.upheavaldesign.com">
          <input type="hidden" name="return" value="http://www.upheavaldesign.com">
          <input class="text-center" type="text" name="amount" id="amount" placeholder="enter payment amount">
          <input type="submit" class="btn" value="Pay with PayPal">
        </form>
      </div>
    </div>
    <div class="grid-container">
      <div class="cell">
        <hr class="space-xl" />
        <h6 class="text-center">What to Expect</h6>
        <p>Paypal is a safe, secure way to pay online, and it's easy!<br class="show-for-large"> Once we have received
          a payment notification,
          we can begin working on your project.<br class="show-for-large"> Shout with any questions about making a
          payment.</p>
      </div>
    </div>
  </div>
  </div>
</article>
<?php include_once($root."/templates/footer.php"); ?>