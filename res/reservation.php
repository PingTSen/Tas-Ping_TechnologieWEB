<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<?php

 
   
   class reservation{
      
      private $html;
      private $numberOfPlaces;
      private $errorMesage;
      private $destination;
      private $isError;
      
      public function __construct()
      {
         
         $this->numberOfPlaces = 0;
         $this->destination = null;
         $this->errorMesage = "Verify that the number of places is a number <br> and the destination is a string. <br>
                               The specific caracter is not accepted.";
  
      }
         
      public function getIsError()
      {
         return $this->isError;
      }   
      
      public function setIsError($error)
      {
         $this->isError = $error;
      }
         
         
      public function getNumberOfPlaces()
      {
         return $this->numberOfPlaces;
      }
      
      
      public function getDestination()
      {
         return $this->destination;
      }
      
      
      public function getHTML(){
         return $this->html;
      }
      
      public function getErrorMesage(){
         return $this->errorMesage;
      }
      
      public function setNumberOfPlaces($number)
      {
         $this->numberOfPlaces = $number;
      }
      
      public function setDestination($destination)
      {
         $this->destination = $destination;
      }
      
      public function isANumber($number)
      {
         $isNumber = false;
         if(is_numeric($number)){
            $isNumber = true;
         }
         return $isNumber;
      }
      
      
      public function isAString($string){
         $isEmpty = true;
         if(empty($string)){
            $isEmpty = false;
         }
         return $isEmpty;
      }
      
      
      public function createPersonLabel()
      {
         if ($this->number !=0) {
            
            for ($counter = 0 ; $counter <$number ; $counter ++) {
                $this->html.= '<label for="name">Nom  :</label> <input type="text" name="name[]" / ><br>
                               <label for="ages">Age  :</label> <input type="text" name="ages[]" / ><br><br>';                             
             }
             
             $this->html.= '</div>';
             $this->html.= '<br><input type="submit" value="Etape suivante" />
             <input type="submit" value="Retour à la page précédente" />
             <input type="submit" value="Annuler la reservation" />';
             $this->html.= '</form>';
             $this->html.= '</body> </html>';
          
         }
      }
      
      
      public function getDisplay()
      {
         echo $html;
      }
   }

?>