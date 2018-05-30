<?php
 
require_once '../Modelo/conexion:login.php';
 
class USER
{   
    private $conn;    
    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }
     
    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }
     
    public function lasdID()
    {
        $stmt = $this->conn->lastInsertId();
        return $stmt;
    }
     
    public function register($uname,$email,$upass,$code)
    {
        try
        {                           
            $password = md5($upass);
            $stmt = $this->conn->prepare("INSERT INTO usuarios(correo,contrasena,tipo_usuario,token_Code) 
            VALUES(:correo, :contrasena, :tipo_usuario :active_code)");
            $stmt->bindparam(":correo",$correo);
            $stmt->bindparam(":contrasena",$contrasena);
            $stmt->bindparam(":tipo_usuario",$tipo_usuario);
            $stmt->bindparam(":active_code",$code);
            $stmt->execute();   
            return $stmt;
        }
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }
     
    public function login($email,$upass)
    {
        try
        {
            $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE correo=:id");
            $stmt->execute(array(":id"=>$email));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
             
            if($stmt->rowCount() == 1)
            {
                if($id['id']=="Y")
                {
                    if($userRow['userPass']==md5($upass))
                    {
                        $_SESSION['correo'] = $userRow['contrasena'];
                        return true;
                    }
                    else
                    {
                        header("Location: index.php?error");
                        exit;
                    }
                }
                else
                {
                    header("Location: index.php?inactive");
                    exit;
                }   
            }
            else
            {
                header("Location: index.php?error");
                exit;
            }       
        }
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }
     
     
    public function is_logged_in()
    {
        if(isset($_SESSION['correo']))
        {
            return true;
        }
    }
     
    public function redirect($url)
    {
        header("Location: $url");
    }
     
    public function logout()
    {
        session_destroy();
        $_SESSION['correo'] = false;
    }
     
    function send_mail($correo,$message,$subject)
    {                       
require 'mailer/PHPMailerAutoload.php';
 
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = "mail.smtp2go.com";
$mail->Port = 2525;
$mail->SMTPAuth = true;
$mail->Username = "lionardogomiz@gmail.com";
$mail->Password = "cXp4MHJ1ZXcxZ2Mw";
$mail->setFrom('demo@tusitio.com', 'Confirmacion de miembros');
$mail->addAddress($email);
$mail->Subject = $subject;
$mail->MsgHTML($message);
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
        
}
    }   
}