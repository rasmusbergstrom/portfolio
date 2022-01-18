<?php include('contact.php'); ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Kontakt</title>
</head>
<body>
    <section>
        <form method="post" action="index.php" autocomplete="off">
            <div>
                <label for="name">Namn</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($userName) ?>">
            </div>
            <div class="error-label">
                <h3>
               
                </h3>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($userEmail) ?>">
            </div>
            <div class="error-label">
                <h3>
                   
                </h3>
            </div>
            <div id="info">
                <label for="message">Meddelande</label>
                <textarea rows="10" cols ="49" name="message" value="<?php echo htmlspecialchars($userMessage)?>"></textarea>
            </div>
            <div class="error-label">
                <h3>
                   
                </h3>
            </div>
            <div id="submit">
                <input id="submit" type="submit" value="Skicka" name="submit" >
            </div>
        </form>
    </section>
</body>
</html>