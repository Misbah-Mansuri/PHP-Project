<?php 

// Print 1 to 100 numbers divisible by 3 ,5 and both add write foo,bar and foobar respectively


for($num=1; $num<= 100; $num++)
{
	if($um % 3 == 0 AND $num % 5 == 0)
  	{
    		echo "foobar ";
  	}elseif($um % 3 == 0)
	{
		echo "foo ";
  	}elseif($um % 5 == 0)
	{
		echo "bar ";
  	}else
	{
		echo $num." ";
  	}
}

?>
