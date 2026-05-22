<?php
session_start();
class users{
    public $host="localhost";
    public $username="root";
    public $pass="";
    public $db_name="project";
    public $conn;
    public $data;
    public $cat;
    public $qus;
    
    

    public function __construct()
    {
           $this->conn=new mysqli($this->host, $this->username, $this->pass, $this->db_name);
            if($this->conn->connect_errno)
            {
                die ("database connection failed".$this->conn->connect_errno);
            }
    }
    public function signup($data)
    {
        $this->conn->query($data);
        return true;
    }




    public function signin($email,$password)
    {
       $query=$this->conn->query("select email,password from signup where email='$email' and password='$password'");
       $query->fetch_array(MYSQLI_ASSOC);
       if($query->num_rows>0)
       {
           $_SESSION['email']=$email;
           return true;
       }
       else
       {
            return false;
       }
       
    }
    
  
    public function users_profile($email)
    {
        $query=$this->conn->query("select * from signup where email='$email'");
        $row=$query->fetch_array(MYSQLI_ASSOC);
        if($query->num_rows>0)
        {
           
            $this->data[]=$row;
        }
      return $this->data;

    }
    public function cat_show()
    {
        
            $query=$this->conn->query("select * from category");
            while($row=$query->fetch_array(MYSQLI_ASSOC))
            
            {
               
                $this->cat[]=$row;
            }
          return $this->cat;
    
        
    }
    
public function qus_show($qus)
{
  
    
    $query=$this->conn->query("SELECT  * from questions where cat_id='$qus'  ORDER BY RAND()");
   
    while($row=$query->fetch_array(MYSQLI_ASSOC))
    {
       
        $this->qus[]=$row;
    }
  return $this->qus;
}



public function answer($data)
{
   $ans=implode("",$data);
   $right=0;
   $wrong=0;
   $no_answer=0;

   $query=$this->conn->query("select id,ans from  questions where cat_id='".$_SESSION['cat']."'");
    while($question=$query->fetch_array(MYSQLI_ASSOC))
    
    {
       error_reporting(0);
       if($question['ans']==$_POST[$question['id']])
       {
           $right++;
       }
       elseif($_POST[$question['id']]=="no_attempt")
       {
           $wrong++;
       }
       else
       {
               $no_answer++;
           }
       }
      
       $array=array();
       $array['right']=$right;
       $array['wrong']=$wrong;
       $array['no_answer']=$no_answer;
       return $array;
    }

    public function add_quiz($rec)
    {
    $a=$query=$this->conn->query($rec);
        
      
    }
    public function add_cat($ad)
    {
       $b=$this->conn->query($ad);
    }
   

    public function adminlogin($email,$password)
    {
       $query=$this->conn->query("select email,password from admin where email='$email' and password='$password'");
       $query->fetch_array(MYSQLI_ASSOC);
       if($query->num_rows>0)
       {
           $_SESSION['email']=$email;
           return true;
       }
       else
       {
            return false;
       }
       
    }





    public function url($url)
    {
        header("location:".$url);
    }
}
?>