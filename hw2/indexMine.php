<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title> Shoots </title>
		<link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <header>
           <h1>ODDS AND EVENS!</h1> 
        </header>
        
        <?php
            
         function displaySymbol($randomValue, $pos)
        {
            
            switch($randomValue)
            {
                case 0: $symbol = "1";
                    break;
                case 1: $symbol = "2";
                    break;
              
            }
            
            echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='$symbol' width='80'/>";
            
            
        }
             function generation() {
            $cards = array(); 
            for ($i = 0; $i < 2; $i++) {
                array_push($cards, $i); 
            }
            shuffle($cards);
            return $cards; 
        }
        
         function displayPlayers($person) {
            // show profile pic
            echo "<h2><img src='".$person["profilePicUrl"]."'width: 30%>"; 
         
                echo "<img src='".$card["imgURL"]."'> "; 
             
            }
    
        
         function numTocard($num) {
            $cardVal = $num + 1; 
            $cardType = floor($num); 
            $Str = "";
            switch($cardType) {
                case 0: 
                    $Str = "one"; 
                    break; 
                case 1: 
                    $Str = "two"; 
                    break; 
            }
            $card = array(
                'num' => $cardVal, 
                'suit' => $cardType, 
                'imgURL' => "./img/".$Str."/".$cardVal.".png"
                ); 
            return $card; 
        }
        
      function printingD($emblem) {
            for ($i = 0; $i < count($emblem); $i++) {
                $cardNum = $emblem[$i]; // number between 0 and 51
                $card = numTocard($cardNum); 
                echo "<img src='".$card["imgURL"]."'>"; 
            }
        }
        // Return a specific number of cards
        function generateHand($emblem) 
        {
            $hand = array(); 
            global $emblem;   // Needed so cards are actually popped
            
                $cardNum = array_pop($emblem);
                $card = numTocard($cardNum);
                $total +=  $card['num'];

                array_push($hand, $card);
          
        }
        
       function play()
       {
            for($i = 1;$i<4;$i++)
            {
                ${"randomValue".$i} = rand(0,1);
                displaySymbol(${"randomValue" . $i}, $i);
            }
       }
     $emblem = generation();
        // Generates each person
        $person0 = array(
            "name" => "Goku", 
            "profilePicUrl" => "./profilePic/goku.png",
            "cards" => generateHand($emblem)
            );
        $person1 = array(
            "name" => "Piccolo", 
            "profilePicUrl" => "./profilePic/piccolo.png",
            "cards" => generateHand($emblem)
            );
        $person2 = array(
            "name" => "Freiza", 
            "profilePicUrl" => "./profilePic/freiza.png",
            "cards" => generateHand($emblem)
            );  
       
        // Shuffles order everyone is displayed in
        $randomDisplay = array(0,1,2);
        shuffle($randomDisplay);
        
        // Displays each person
        displayPlayers(${'person'.$randomDisplay[0]});
        displayPlayers(${'person'.$randomDisplay[1]});
        displayPlayers(${'person'.$randomDisplay[2]});
        // Shows winner
    //   winner();
     
        play();
        
       
        ?>
        

        
        
    <footer>
        <div id="textS"> These are the rules: Its a game of odds and evens. The one that is the odd one out gets the win! Simple as that!
     </footer>
     </body>
     
 
</html>