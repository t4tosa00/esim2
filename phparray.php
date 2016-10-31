<?php include 'menu.php'; ?>
<h1>php array</h1>
<?php
$asiakkaat=$arrayName = array(
	array("en" => 'mikko' , "sn" => 'virtanen'),
	array("en" => 'mikko' , "sn" => 'virtanen'),
	array("en" => 'mikko' , "sn" => 'virtanen'),
	array("en" => 'mikko' , "sn" => 'virtanen')
	);
echo "<h2>print_r</h2>";
print_r($asiakkaat);
?>
<h2>tulostus for each loopilla</h2>
<?php
ini_set('display_errors', 1);
foreach ($asiakkaat as $rivi) {
	echo 'Etunimi'.$rivi['en'].'Sukunimi'.$rivi['en'].'<br>';
}
?>
<h2>tulostus taulukkona</h2>
<TABLE border=1>
	<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>
	<?php
	foreach ($asiakkaat as $rivi) {
		echo '<tr><td>'.$rivi['en']. '</td><td>'.$rivi['sn'].'</td><td>';
	}
?>
<?php include 'footer.php'; ?>