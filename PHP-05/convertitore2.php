<?php
function converti($numero){
    $Nromano='';
    $ciclo=true;
    while($ciclo===true){
        if($numero===0){
            $ciclo=false;
        break;
        }
        if($numero-1000>=0){
            $numero=$numero-1000;
            $Nromano=$Nromano.M;
        }else{
           if($numero-900>=0){
            $numero=$numero-900;
            $Nromano=$Nromano.CM; 
           }else{
            if($numero-500>=0){
                $numero=$numero-500;
                $Nromano=$Nromano.D; 
           }else{
            if($numero-400>=0){
                $numero=$numero-400;
                $Nromano=$Nromano.CD; 
           }else{
            if($numero-100>=0){
                $numero=$numero-100;
                $Nromano=$Nromano.C; 
           }else{
            if($numero-90>=0){
                $numero=$numero-90;
                $Nromano=$Nromano.XC; 
           }else{
            if($numero-50>=0){
                $numero=$numero-50;
                $Nromano=$Nromano.L; 
           }else{
            if($numero-40>=0){
                $numero=$numero-40;
                $Nromano=$Nromano.XL; 
           }else{
            if($numero-10>=0){
                $numero=$numero-10;
                $Nromano=$Nromano.X; 
           }else{
            if($numero-9>=0){
                $numero=$numero-9;
                $Nromano=$Nromano.IX; 
           }else{
            if($numero-5>=0){
                $numero=$numero-5;
                $Nromano=$Nromano.V; 
           }else{
            if($numero-4>=0){
                $numero=$numero-4;
                $Nromano=$Nromano.IV; 
           }else{
            if($numero-1>=0){
                $numero=$numero-1;
                $Nromano=$Nromano.I; 
           }
        }
    }
}
}
           }
        }
    }
}
}
           }
        }
    }
}
return $Nromano;
}

    
?>