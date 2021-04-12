<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>My WebPage</title>
</head>
<body>
    <h1>welcome to my webpage !!!</h1>
    <h2>Customers</h2>
    <?php foreach($customers as $customer): ?>
    <p><?= $customer->name;  ?></p>
    <?php endforeach; ?>
</body>
</html>