
<html>
<head>
	<title>Tic Tac Toe</title>
</head>
<body>
	<?php 
		$board = array();

		function populate() //fill in the board with randomized x's and o's
		{
			$a = ['x', 'o', '_'];
			$b = [];
			$result = [];

			for ($i=0; $i < 3; $i++) { 
				$b[] = array_rand($a , 1);
			}

			for ($i=0; $i < 3; $i++) {
				$result[] = $a[$b[$i]];
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

			function check_x()//checks to see if there are 3 x's in a row
			{
				//HORIZONTAL
				foreach ($this->a as $key => $r)
				{
					$x_total = 0;
					foreach ($r as $key => $c) //check each row to see if three consecutive
					{
						if ($c == 'x')
						{
							$x_total++;
						}
					}

					if ($x_total == 3)
					{
						exit("horizontal X win!");
					}
				}

				//VERTICAL
				for ($i=0; $i < 3; $i++)
				{
					$vx_total = 0;
					for ($j=0; $j < 3; $j++)
					{ 
						// echo $this->a[$j][$i];
						if ($this->a[$j][$i] == 'x')
						{
							$vx_total++;
						}

						if ($vx_total == 3)
						{
							exit("vertical X win!");
						}
					}
				}

				//DIAGONALS
				if (($this->a[0][0]=='x') && ($this->a[1][1]=='x') && ($this->a[2][2]=='x'))
				{
					exit("Diagonal X Win!");
				}

				if (($this->a[0][2]=='x') && ($this->a[1][1]=='x') && ($this->a[2][0]=='x'))
				{
					exit("Diagonal X Win!");
				}
			}

			function check_o()
			{
				//HORIZONTAL
				foreach ($this->a as $key => $r)
				{
					$o_total = 0;
					foreach ($r as $key => $c) //check each row to see if three consecutive
					{
						if ($c == 'o')
						{
							$o_total++;
						}
					}

					if ($o_total == 3)
					{
						exit("horizontal O win!");
					}
				}

				//VERTICAL
				for ($i=0; $i < 3; $i++)
				{
					$vo_total = 0;
					for ($j=0; $j < 3; $j++)
					{ 
						// echo $this->a[$j][$i];
						if ($this->a[$j][$i] == 'o')
						{
							$vo_total++;
						}

						if ($vo_total == 3)
						{
							exit("vertical O win!");
						}
					}
				}

				//DIAGONALS
				if (($this->a[0][0]=='o') && ($this->a[1][1]=='o') && ($this->a[2][2]=='o'))
				{
					exit("Diagonal O Win!");
				}

				if (($this->a[0][2]=='o') && ($this->a[1][1]=='o') && ($this->a[2][0]=='o'))
				{
					exit("Diagonal O Win!");
				}
			}
		}

		$test = new Board();
		$test->show();
		$test->check_x();
		$test->check_o();
	 ?>


</body>
</html>