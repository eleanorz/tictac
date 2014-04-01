
<html>
<head>
	<title>Tic Tac Toe</title>
</head>
<body>
	<?php 
		$board = array();

		function populate() //fill in the board with randomized x's and o's
		{
			$a = ['x', 'o'];
			$b = [];
			$result = [];

			for ($i=0; $i < 3; $i++) { 
				$b[] = array_rand($a , 1);
			}

			for ($i=0; $i < 3; $i++) {
				$result[] = $a[$b[$i]];
				# code...
			}

			return($result);
		}


		class Board
		{
			function __construct()
			{
				$a = [];

				//generate the board below:

				for ($i=0; $i < 3; $i++) { 
				$row = populate();
				//add in a row
				$this->a[] = $row;
				}

			}

			function show()
			{
				foreach ($this->a as $key => $value) {
					//inside the row

					foreach ($value as $key => $subvalue) {
						//breaking out the columns
						echo "[ ".$subvalue." ]";
					}

					echo "<br>";
				}
			}
		}

		$test = new Board();
		$test->show();
	 ?>


</body>
</html>