<?php
class stagiaire{
    private $id;
    private $Nom;
    private $prenom;
    private $email;
    private $age;
    private $login;
    private $password;

 public function getId()
 {
    return $tnis->id;
 }
 public function setId($id)
 {
    $this->id = $id;
 }

 public function getNom()
 {
   return $this->Nom;
 }
 public function setNom($Nom)
 {
    $this->nom=$Nom;
 }

 public function getPrenom(){
    return $this->prenom;
 }
 public function setPrenom($prenom){
    $this->prenom =$prenom;
 }

 public function getEmail(){
    return $this->email;
 }
 public function setEmail($email){
    $this->email=$email;
 }

 public function getAge(){
    return $this->age;
 }
 public function setAge($age){
    $this->age=$age;
 }

 
 public function getLogin(){
    return $this->login;
 }
 public function setLogin($login){
    $this->login=$login;
 }

 public function getPassword(){
    return $this->password;
 }
 public function setPassword($password){
    $this->password=$password;
 }

 public function create()
 {
    $sqlState = $this->database()->prepare("INSERT INTO stagiaire VALUES(null,?,?,?,?,?,?)");
     return $sqlState->execute([
        $this->Nom,
        $this->prenom,
        $this->age,
        $this->login,
        $this->password,
        $this->email,
    ]);
var_dump($this->database());
 }

 public function edit($id)
 {
   $sqlState = $this->database()->prepare("UPDATE stagiaire 
                     SET Nom =?,
                         prenom=?,
                         age=?,
                         login=?,
                         password=?,
                         email=?
                         WHERE id=?
                                 ");
   $sqlState->execute([
                   $this->Nom,
                   $this->prenom,
                   $this->age,
                   $this->login,
                   $this->password,
                   $this->email,
                  $id
   ]) ;                             
 }

 public function find($id)
 {

 }


 public function delete($id)

 {
  $sqlState = $this->database()->prepare("DELETE FROM stagiaire WHERE id=?");
  $sqlState->execute([$id]);
 }


 public function database()
 {
    return new PDO('mysql:dbname=ofppt;host=localhost',"root","");
 }





}




?>