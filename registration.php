<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Registration Form</title>
</head>
<body>
    <main>

        <div class="title-head">
            <h1>REGISTER</h1>
        </div>

        <form action="result.php" method="POST">

            <div class="input-row-1">
                <input type="text" name="firstname" placeholder="Firstname">
                <input type="text" name="lastname" placeholder="Lastname">
            </div>
    
    
            <div class="input-row-2">
                <input type="text" name="age" placeholder="Age">
                <input type="text" name="contact" placeholder="Contact">
            </div>
    
            <div class="input-row-3">
                <input type="text" name="address" placeholder="Address">
            </div>
    
            <div class="submit">
                <input type="submit" value="SUBMIT">
            </div>


        </form>

    </main>
</body>
</html>