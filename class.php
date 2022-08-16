<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 class student{
            public $fname;
            public $lname;
            public $bdate;
            public $country;
            function displayDetails(){
                return "Student Name: $this->fname $this->lname, Birthdate: $this->bdate, From: $this->country";
            }
            function displayName(){
                return "Student Name: $this->fname $this->lname";
            }
        }
        $Marcelo = new student();
        $Marcelo->fname = "Marcelo";
        $Marcelo->lname = "Romero";
        $Marcelo->bdate = "2015";
        $Marcelo->country = "Brazil";
        echo "<h1>".$Marcelo->displayDetails()."</h1>";
        echo "<h2>".$Marcelo->displayName()."</h2>";
        $Haruka = new student();
        $Haruka->fname = "Haruka";
        $Haruka->lname = "Nakamura";
        $Haruka->bdate = "2000";
        $Haruka->country = "Japan";
        echo "<h1>".$Haruka->displayDetails()."</h1>";
        echo "<h2>".$Haruka->displayName()."</h2>";

        class students{
            private $fname;
            private $lname;
            private $bdate;
            private $country;
            function __destruct()
            {
                echo "Student Name: $this->fname $this->lname, Birthdate: $this->bdate, form: $this->country";
            }
            function __construct($fname,$lname,$bdate,$country="universe") // can use in public/private
            {
                $this->fname = $fname;
                $this->lname = $lname;
                $this->bdate = $bdate;
                $this->country = $country;
            }
            function displayDetails(){
                return "Student Name: $this->fname $this->lname, Birthdate: $this->bdate, form: $this->country";
            }
            function displayName(){
                return "Student Name: $this->fname $this->lname";
            }

            /**
             * Get the value of fname
             */ 
            public function getFname()
            {
                        return $this->fname;
            }

            /**
             * Set the value of fname
             *
             * @return  self
             */ 
            public function setFname($fname)
            {
                        $this->fname = $fname;

                        return $this;
            }
        }
        $Marcelo1 = new students("Marcelo","Romero","2015","Brazil");
        echo "<h1>".$Marcelo1->displayDetails()."</h1>";
        echo "<h2>".$Marcelo1->displayName()."</h2>";
        $Haruka1 = new students("Haruka","Nakamura","2000");
        echo "<h1>".$Haruka1->displayDetails()."</h1>";
        echo "<h2>".$Haruka1->displayName()."</h2>";
        unset($Marcelo);
        $Marcelo1->setFname("Henry");
        echo "<h1>".$Marcelo1->displayDetails()."</h1>";

    ?>
</body>
</html>