<?php

	require_once "src/ScrabbleScore.php";

	class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
	{

		function test_calculateScore_noInput()
		{
				$test_ScrabbleScore = new ScrabbleScore;
				$input = "";

				//Act
				$result = $test_ScrabbleScore->calculateScore($input);

				//Assert
				$this->assertEquals(0, $result);

		}

		function test_calculateScore_enter_a()
		{
				$test_ScrabbleScore = new ScrabbleScore;
				$input = "a";

				//Act
				$result = $test_ScrabbleScore->calculateScore($input);

				//Assert
				$this->assertEquals(1, $result);

		}

		function test_calculateScore_enter_d()
		{
				$test_ScrabbleScore = new ScrabbleScore;
				$input = "D";

				//Act
				$result = $test_ScrabbleScore->calculateScore($input);

				//Assert
				$this->assertEquals(2, $result);

		}

		function test_calculateScore_enter_b()
		{
				$test_ScrabbleScore = new ScrabbleScore;
				$input = "B";

				//Act
				$result = $test_ScrabbleScore->calculateScore($input);

				//Assert
				$this->assertEquals(3, $result);

		}

		function test_calculateScore_enter_f()
		{
				$test_ScrabbleScore = new ScrabbleScore;
				$input = "f";

				//Act
				$result = $test_ScrabbleScore->calculateScore($input);

				//Assert
				$this->assertEquals(4, $result);

		}

		function test_calculateScore_enter_k()
		{
				$test_ScrabbleScore = new ScrabbleScore;
				$input = "k";

				//Act
				$result = $test_ScrabbleScore->calculateScore($input);

				//Assert
				$this->assertEquals(5, $result);

		}

		function test_calculateScore_enter_j()
		{
				$test_ScrabbleScore = new ScrabbleScore;
				$input = "J";

				//Act
				$result = $test_ScrabbleScore->calculateScore($input);

				//Assert
				$this->assertEquals(8, $result);

		}

		function test_calculateScore_enter_q()
		{
				$test_ScrabbleScore = new ScrabbleScore;
				$input = "Q";

				//Act
				$result = $test_ScrabbleScore->calculateScore($input);

				//Assert
				$this->assertEquals(10, $result);

		}

		function test_calculateScore_enter_non_alpha()
		{
				$test_ScrabbleScore = new ScrabbleScore;
				$input = "!";

				//Act
				$result = $test_ScrabbleScore->calculateScore($input);

				//Assert
				$this->assertEquals(0, $result);

		}

	}

?>
