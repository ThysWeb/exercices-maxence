function calculatrice ()
{
 var n1 = prompt ("Donner le premier chiffre" ),
  ope = prompt("Donner l'opérateur" ),
  n2 = prompt("Donner le second chiffre" ),
  t;
 if (n1 == "" || n2 == "" || ope == "" )
 {
  return alert ("pas de données" );
 }
 n1 = parseInt (n1, 10);
 n2 = parseInt (n2, 10);
 switch (ope)
 {
  case '+':
   t = n1 + n2;
   break;
  case '-':
   t = n1 - n2;
   break;
  case '*':
   t = n1 * n2;
   break;
  case '/':
   t = n1 / n2;
   break;
  default:
   t = "operateur non reconnu !";
   break;
 }
 alert (t);
};