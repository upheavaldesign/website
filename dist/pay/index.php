<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php"); ?>

<article class="page <?php echo $parent; ?>">
  <section class="statement">
    <div class="row">
      <div class="columns xlarge-10 large-11 large-centered desc">
        <h1>Make a Payment</h1>
      </div>
    </div>
  </section>
  <hr class="space-xl hide-for-large-up"/> 
  <hr class="space show-for-large-up"/>
  <section class="row">
    <div class="columns text-center">        
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payment_form_id">    
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="sales@upheavaldesign.com">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="bn" value="PP-BuyNowBF">
        <input type="hidden" name="item_name" value="Online Payment">
        <input type="hidden" name="cancel_return" value="http://www.upheavaldesign.com">
        <input type="hidden" name="return" value="http://www.upheavaldesign.com">					
        <ul class="columns large-6 large-centered">		
            <li>
                <input class="text-center" type="text" name="amount" id="amount" placeholder="enter payment amount">
            </li>               
            <li>				
                <input type="submit" class="btn" value="Pay with PayPal">
            </li> 
        </ul> 
      </form>
      <div class="columns large-10 large-centered text-center">
      	<hr class="space-xl"/>
      	<h6 class="text-center">What to Expect</h6>
      	<p>Paypal is a safe, secure way to pay online, and it's easy!<br>Once we have received a payment notification, we can begin working on your project.<br>Shout with any questions about making a payment.</p>
      </div>
    </div>
  </section>
  

</article>
<?php include_once($root."/templates/footer.php"); ?>