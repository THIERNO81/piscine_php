<?php
function checkAge($age)
{
  if(empty($age))
  {
    return "Pas d'age ! \n";
  }
  else
  {
    return "Votre age est de $age ans \n";
  }
}
echo checkAge(39);

?>