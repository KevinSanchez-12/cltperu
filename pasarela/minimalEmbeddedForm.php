<?php
  require_once __DIR__ . '/vendor/autoload.php';
  require_once __DIR__ . '/keys.php';
  require_once __DIR__ . '/helpers.php';
  $correo = $_POST["correo"];
  $client = new Lyra\Client();
  $store = array("amount" => 0001, 
  "currency" => "USD", 
  "orderId" => uniqid("MyOrderId"),
  "customer" => array(
    "email" => "example@cltperu.org",
  ));
  $response = $client->post("V4/Charge/CreatePayment", $store);
  if ($response['status'] != 'SUCCESS') {
      display_error($response);
      $error = $response['answer'];
      throw new Exception("error " . $error['errorCode'] . ": " . $error['errorMessage'] );
  }
  $formToken = $response["answer"]["formToken"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLT Perú</title>
    <link rel="icon" href="../assets/img/logo/logoico.png">
    <script src="<?php echo $client->getClientEndpoint();?>/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js"
        kr-public-key="<?php echo $client->getPublicKey();?>" kr-post-url-success="../sucess.php">
    </script>
    <script src="<?php echo $client->getClientEndpoint();?>/static/js/krypton-client/V4.0/ext/classic.js">
    </script>
    <link rel="stylesheet" href="../assets/css/pasarela.css?1.4">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <section class="pasarela">
        <div class="kr-embedded box" kr-form-token="<?php echo $formToken;?>">
            <img class="logo" src="../assets/img/logo/logo.png">
            <section>
                <div class="kr-pan input-text"></div>
                <div class="logos">
                    <img src="../assets/img/etc/visa-2.svg">
                    <img src="../assets/img/etc/mastercard-2.svg">
                </div>
                <div class="kr-expiry input-text"></div>
                <div class="kr-security-code input-text"></div>
                <button class="kr-payment-button"><?php echo $amount?></button>
                <div class="kr-form-error"></div>
            </section>
        </div>
    </section>
</body>

</html>