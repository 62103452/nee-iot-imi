<html>
<head>
</head>
 <body>

<div class="container">
  <div class="jumbotron">
    <h1> Dararat Khanngang 62103452</h1>      
    
  </div>
<h1><center> Dararat Khanngang 62103452</center>

 
<center><iframe  src="https://thingspeak.com/channels/1458744/maps/channel_show"width="450" height="260" > </center></iframe>  
<br><br><iframe  src="https://thingspeak.com/channels/1458744/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
                width="450" height="300"  title="Humidity" ></br></br> </iframe>
 <iframe  src="https://thingspeak.com/channels/1458744/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
        width="450" height="300"  title="Temperature"  > </iframe><br>
 
     <?php
        $api_url = 'https://api.thingspeak.com/channels/1458744/fields/1.json?results=1';
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        $user_data = $response_data->feeds;
        $user_data = array_slice($user_data, 0);
        foreach ($user_data as $user) {
            echo "Humidity: ".$user->field1;
            echo " %";
         }
        ?>
     </p>
  <?php
        $api_url = 'https://api.thingspeak.com/channels/1458744/fields/1.json?results=1';
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        $user_data = $response_data->feeds;
        $user_data = array_slice($user_data, 0);
        foreach ($user_data as $user) {
             echo "Temperature: ".$user->field2;
             echo " C"; 
         }
        ?>
</body>
</html>

