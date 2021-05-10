<?php
class csv extends mysqli
{
    private $state_csv = false;
    function __construct()
    {
        parent::__construct("localhost","u20s2129_team129","team129BackEnd","u20s2129_backend_setup");
        if ($this->connect_error){
            echo "Fail to connect to DataBase :". $this->connect_error;
        }
    }
    public function import($file)
    {

        $file = fopen($file,'r');
        while ($row = fgetcsv($file)){
            $value = "'". implode("','", $row) ."'";
            $q = "INSERT INTO provider(name,abn,city,suburb,state_territory,address,phone_num,email_address,preference) VALUES(". $value .")";
            if ( $this->query($q)){
                $this->state_csv = true;

            }else{
                $this->state_csv =false;
            }
        }
        if($this ->state_csv){
           echo "Succesfully Imported";
        }else{
            echo "Something went wrong";
        }
    }
}
?>
