<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tell us about yourself</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <header class="form-header">
                <span class="eyebrow">A little introduction</span>
                <h1>Tell us about yourself</h1>
                <p>Share a few details to get started.</p>
            </header>

            <div class="form-fields">
                <div class="field">
                    <label for="firstname">First name</label>
                    <input id="firstname" name="firstname" placeholder="e.g. Alex" type="text" autocomplete="given-name" required>
                </div>

                <div class="field">
                    <label for="lastname">Last name</label>
                    <input id="lastname" name="lastname" placeholder="e.g. Morgan" type="text" autocomplete="family-name" required>
                </div>

                <div class="field">
                    <label for="favouritepet">Favourite pet</label>
                    <select id="favouritepet" name="favouritepet">
                        <option value="none">I don't have one</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="bird">Bird</option>
                    </select>
                </div>
            </div>

            <button type="submit" name="submit">Submit details <span aria-hidden="true">→</span></button>
        </form>
    </main>
</body> 
</html>