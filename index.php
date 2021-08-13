<h1> Dararat Khanngang 62103452

<center><iframe  src="https://thingspeak.com/channels/1458744/maps/channel_show"width="450" height="300" frameborder="10"> </center></iframe>  
<br><br><iframe  src="https://thingspeak.com/channels/1458744/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"width="450" height="300" frameborder="3"></br></br> </iframe>
<iframe  src="https://thingspeak.com/channels/1458744/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"width="450" height="300" frameborder="3"> </iframe>


<script src="https://api.thingspeak.com/channels/1458744/feeds.json?results=2"></script>
<script type="text/javascript">
         $.getJSON("https://api.thingspeak.com/channels/1458744/feeds.json?results=2",function(json)
        {
            console.log(json.with[0].content)
            var thing = JSON.stringify(json.with[0].content);
            document.getElementById("test").innerHTML = thing;
        });
    </script>
    
