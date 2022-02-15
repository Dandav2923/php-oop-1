<?php 
    class Movie {
        public $title;
        public $actors;
        public $genre;
        public $movieDirector;
        public $plot;
        public $year;
        public $yearProduction;
        public $yearLaunch;
        function __construct($_year)
        {
            $this->year = $_year;
        }
        function setYearProduction($year, $yearProduction) {
        $this->yearLaunch = $yearProduction - $year;
        }
        // function getYearProduction () {
        // return $this->yearLaunch;
        // }
    }




// $title = new Movie ();
// $actors = new Movie();
// $genre = new Movie();
// $movieDirector = new Movie();
// $plot = new Movie();
$signoreDegliAnelli = new Movie('');
$signoreDegliAnelli-> title ='Il Signore Degli Anelli';
// echo $signoreDegliAnelli-> title;
$signoreDegliAnelli->setYearProduction(1990, 1994);
// echo $signoreDegliAnelli->yearLaunch;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $signoreDegliAnelli -> title; ?></h1>
        <p>Il film è stato prodotto in <?php echo $signoreDegliAnelli -> yearLaunch; ?> anni</p>
    </div>
</body>
</html>