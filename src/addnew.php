<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New</title>
</head>
<body>
    <div class="add-container">
        <h2 class="form-title">Eintrag hinzufügen</h2>
        <br>
        <?php if (isset($_SESSION['errors'])): ?>
            <div class="error">
                <ul>
                    <?php foreach($_SESSION['errors'] as $error): ?>
                        <li><?php echo($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <br>
        <?php endif; ?>

        <div class="add-form">
            <form action="index.php?page=entries" method="post">
                <div class="datetime">
                    <div><i class="fa-solid fa-calendar-days"></i> <input type="date" name="" id="currentDate"></div>
                
                    <div><i class="fa-solid fa-clock"></i> <input type="time" name="" id="currentTime"></div>
                </div>
                <div class="add-section">
                    <div class="title">
                        <h3>Energie-Level</h3>
                        <i class="fa-solid fa-circle-info"></i>
                    </div>
                    <input class="slider" type="range" name="level" min="0" max="10" value="5" step="0.5">
                    <div class="description">
                        <h3>7.5</h3>
                        <h3 class="level-text">eher hoch</h3>                        
                    </div>
                </div>

                <div class="add-section">
                    <div class="title">
                        <h3>Aktivitäten</h3>
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                    <div class="activities">
                        <a href="#" class="activity">Relax</a>
                        <a href="#" class="activity">School</a>
                        <a href="#" class="activity">Therapy</a>
                        <a href="#" class="activity">Relax</a>
                        <a href="#" class="activity">School</a>
                        <a href="#" class="activity">Therapy</a>
                        <a href="#" class="activity">Relax</a>
                        <a href="#" class="activity">School</a>
                        <a href="#" class="activity">Therapy</a>
                        
                        <a href="#" class="activity add"><i class="fa-solid fa-plus fa-2x"></i></a>
                    </div>
                </div>
                
                <textarea name="notes" rows="6" placeholder="Notizen..."></textarea>
        
                <button type="submit" name="login">Hinzufügen</button>

            </form>
        </div>
        
    </div>
</body>

<script>
    //calculate todays date and time
    var today = new Date();
    var date = today.toISOString().substring(0,10);
    var time = today.toISOString().substring(11,16);
    document.getElementById("currentDate").value = date;
    document.getElementById("currentTime").value = time;

</script>


</html>