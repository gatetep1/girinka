<?php

class csv extends mysqli
{
    private $state_csv = false;
    public function __construct()
    {
        parent::__construct('localhost', 'root', '', 'girinka');
        if($this->connect_error)
        {
            echo "Fail to connect to database: ". $this->connect_error;
        }
    }
    public function import($csv)
    {
        $file = fopen($csv, 'r');
        while($row = fgetcsv($file))
        {
          /* var_dump($row);
            print "<pre>";
            print_r($row);
            print "</pre>";  */

            $values = "'". implode("','", $row). "'";
            // echo $value;
            $date = date("Y-m-d h:m:s");
            $q = "INSERT INTO families (`id_no`, `fname`, `lname`, `sex`, `phone`, `sector`, `cell`, `village`,`date`) VALUES(".$values.")";
            //  echo $q;

         if($this->query($q))
           {
                $this->state_csv = true;
           }
           else
           {
            $this->state_csv = false;  
            echo $this->error;             
           }
        }

        if ($this->state_csv) {
            ?>
                <script>
                    window.alert("File Content registered successfully");
                    window.location.href ='manage_family.php';                   
                </script>
            <?php
        }
        else
        {
            ?>
            <script>
                window.alert('Error!');
                window.location.href = 'manage_family.php';
            </script>
        <?php
        }
         
    }
}
?>