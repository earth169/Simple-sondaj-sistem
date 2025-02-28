<?php
$pdo = new PDO('mysql:host=localhost;dbname=poll_tutorial', 'root', '');

if (!isset($_POST['option'])) {
    die('Alege o opțiune!');
}

$option = $_POST['option'];

// Salveaza votul in SQL
$stmt = $pdo->prepare("INSERT INTO poll_votes (option) VALUES (:option)");
$stmt->execute(['option' => $option]);

// Preia total voturi
$stmt = $pdo->query("SELECT option, COUNT(*) as votes FROM poll_votes GROUP BY option");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Calculeaza total general
$totalVotes = array_sum(array_column($results, 'votes'));

// Afiseaza rezultate
echo "<h2>Rezultate sondaj:</h2>";
foreach ($results as $row) {
    $percent = round(($row['votes'] / $totalVotes) * 100);
    echo "✅ {$row['option']} - {$percent}% ({$row['votes']} voturi)<br>";
}

// Link inapoi
echo '<br><a href="poll.php">Votează din nou</a>';
?>
