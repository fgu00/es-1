<html>
    <body>
        <h1>IL NUMERO CONVERTITO è:</h1>
        <?php
        $numeriRomani=array(M,CM,D,CD,C,XC,L,XL,X,IX,V,IV,I);
         $numeriArabi=array(1000,900,500,400,100,90,50,40,10,9,5,4,1);
         $numero=$_POST['numero'];
         $numeroFinale=0;
         $carattere='';
         for($n=0;$n<$numero.substr()+1;$n++){
             if($n!=0){
             $cR=str_split(string $carattere, int $n);
             $cR2=str_split(string $carattere, int $n+1);
             if($cR.$cR2===$numeriRomani[2]){
              $numeroFinale=$numeroFinale.$numeriArabi[2];
             break;
             }
             if($cR.$cR2===$numeriRomani[4]){
                $numeroFinale=$numeroFinale.$numeriArabi[4];
             break;
            }
               if($cR.$cR2===$numeriRomani[6]){
                $numeroFinale=$numeroFinale.$numeriArabi[6];
               break;
            }
               if($cR.$cR2===$numeriRomani[8]){
                $numeroFinale=$numeroFinale.$numeriArabi[8];
               break;
            } 
               if($cR.$cR2===$numeriRomani[10]){
                $numeroFinale=$numeroFinale.$numeriArabi[10];
               break;
            }   
               if($cR.$cR2===$numeriRomani[12]){
                $numeroFinale=$numeroFinale.$numeriArabi[12];
               break;
            }
        } 
             for($n1=0;$n1<sizeof($numeriRomani);$n1++){
             if(str_split(string $carattere, int $n)===$numeriRomani[$n1]){
                $numeroFinale=$numeroFinale.$numeriArabi[$n1];
            break;

             }

         }
        }
        echo $numeroFinale;
         
        ?>
    </body>
</html>