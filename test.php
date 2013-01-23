
	
	<?php
    echo "hi ";
	echo "hello world";
	
	//Variables! Comments denote PHP data types
	$x = 5;	//integer
	$y = 10; //integer
	$z = 25.5; //float
	$xyz = "This is a string.";	//string
	
	$abc = array('apple', 'orange', 'banana', 'grapefruit'); //numerically indexed array
	
	$more_food = array('meat' => 'steak', 'veggies' => 'carrots', 'dairy' => 'ice-cream', 'servings' => 3); //associative array
	?>
	
    <div id="my-page">
    	<?php if (!empty($x)) { ?>
			<p>X is: <pre><?php var_dump($more_food); ?></pre></p>
        <?php } else { ?>
        	<p>Y is: <pre><?php var_dump($y); ?></pre></p>
	</div>