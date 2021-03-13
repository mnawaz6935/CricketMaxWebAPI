


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <title></title>
  
</head>
<body style="width: 100%;height: 100%;align-content: center;">

<form>

<?php 
        $ch = curl_init("https://raredevzapis.000webhostapp.com/cricketMax/getCoins.php");
        // $header=json_encode(
        // array(
        //           "ApiKey"=> "sdgu2NJseloCXdgQE8oldG245fsHJd",
        //             "Content-Type"=> "application/json"
        //       )
        // );
        // $body=json_encode(
        // array(
        //           "account_Id"=> "2021-1855320000007119",
        //             "account_accessToken"=> "00000002232021185532000000",
        //             "deposit"=> "0"
        //       )
        // );
        // curl_setopt($ch, CURLOPT_HEADER, $header);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //                                             'Content-Type: application/json'
        //                                             ));
        
        
        $response = curl_exec($ch);
        
        $array=json_decode($response,true);
        $coins=$array['coins'];
        echo $coins. '<br/>';
        
        curl_close($ch);
        
         ?>
        
        <input type="submit"  value="Reset Coins" name="btn_name"/><br />
            <?php
                if(isset($_GET['btn_name']))
                   {
                  $ch = curl_init("https://raredevzapis.000webhostapp.com/cricketMax/resetCoins.php");
        // $header=json_encode(
        // array(
        //           "ApiKey"=> "sdgu2NJseloCXdgQE8oldG245fsHJd",
        //             "Content-Type"=> "application/json"
        //       )
        // );
        // $body=json_encode(
        // array(
        //           "account_Id"=> "2021-1855320000007119",
        //             "account_accessToken"=> "00000002232021185532000000",
        //             "deposit"=> "-".$coins
        //       )
        // );
        // curl_setopt($ch, CURLOPT_HEADER, $header);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //                                             'Content-Type: application/json'
        //                                             ));
        
        
        $response = curl_exec($ch);
        
        $array=json_decode($response,true);
        $coins=$array['result'];
        echo $coins.'<br/>';
        
        curl_close($ch);
           }
     ?>
</form>
</body>
</html>
