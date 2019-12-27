<?php
 include "./config.php";
 $base= connect();

 $name=$_POST['name'];
 $prenom=$_POST['prenom'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $phone=$_POST['phone'];
 
 $requette="INSERT INTO user(ID,Nom,Prenom,Email,Password,Phone,Role) VALUES (null,'$name','$prenom','$email','$password',$phone,'user')";
 $lignes =$base->exec($requette);

 if($lignes==1)
 {header('location:./../html/connexion.html');}
 else
 {header('location:./../html/inscription.html');}

?>