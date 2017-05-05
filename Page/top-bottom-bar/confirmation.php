<?php
require_once '/vagrant/config.php';
require_once 'header.php';
?>

<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$referenceCode = trim((isset($_GET['referenceCode'])? $_GET['referenceCode'] : ''));

	if (!$referenceCode) {
		header("Location: index.php");
		exit;
	}

/*?merchantId=643695&merchant_name=Fabio+Nowaki&
merchant_address=Rua+Avanhdandava+40+AP+1010+Bela+Vista
&telephone=14981354478
&merchant_url=http%3A%2F%2Fwww.nowakis.com%2F
&transactionState=7
&lapTransactionState=PENDING
&message=PENDING
&referenceCode=LIVIA+E+FABIO%3A8bc5e9d04bb4c29553e9
&reference_pol=941012234
&transactionId=c85e10f2-c35c-4890-8661-3ab5e1ff3e2b
&description=Compra+do+presente+Grill+Mondial+Redondo+Smart+Grill+G-04
&trazabilityCode=&cus=&orderLanguage=pt&extra1=&extra2=
&extra3=&polTransactionState=14&signature=d16a8274b048d9114dd15aecb851613f
&polResponseCode=25&lapResponseCode=PENDING_TRANSACTION_CONFIRMATION&risk=
&polPaymentMethod=160&lapPaymentMethod=BOLETO_BANCARIO&polPaymentMethodType=8
&lapPaymentMethodType=REFERENCED&installmentsNumber=1&TX_VALUE=109.90&TX_TAX=.00
&currency=BRL&lng=pt&pseCycle=&buyerEmail=fabio.nowaki%40gmail.com&pseBank=
&pseReference1=&pseReference2=&pseReference3=&authorizationCode=
*/

	$service_url = API_END_POINT."wedding/order/search?referenceCode=".urlencode($referenceCode);
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	
	if ($curl_response === false) {
		$info = curl_getinfo($curl);
		curl_close($curl);
		die('error occured during curl exec. Additioanl info: ' . var_export($info));
	} else {
		curl_close($curl);
		$order = json_decode($curl_response);
	}

	if (isset($order->response->status) && $order->response->status == 'ERROR') {
		$order = header('Location: /');
	}
?>

<!--CONTENT SECTION-->
<section id="content">

		<!-- HEADING TITLE -->
		<div class="row">
			<div class="col-md-offset-3 col-md-6 text-center">
		
				<div class="page-title">
					<h1>OBRIGADO PELO CARINHO</h1>
											
					<div class="heart-divider">
						<span class="grey-line"></span>
						<i class="de-icon-heart pink-heart"></i>
						<i class="de-icon-heart grey-heart"></i>
						<span class="grey-line"></span>
					</div>
				</div>
			
			</div>
		</div><!-- END of HEADING TITLE -->
		
		<!-- CONTAINER -->
		<div class="container">

			<div class="row">
				<div class="col-md-offset-1 col-md-5">
					<h2 style="margin-top:1px;">Sua requisição de pagamento foi recebida</h2>
					<p>Seu pedido está em andamento.</p>
					
				</div>
				
				<pre> <?php var_dump($order); ?></pre>
			</div><!--END of TEXT SECTION-->
			

		</div><!-- END of CONTAINER -->    
			

</section> <!-- END content -->
			
<?php
require_once 'footer.php';
?>