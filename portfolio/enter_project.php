<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    

<!-- barre de navigation -->


<!-- contenu de la remplire project list -->

<form action="">

    <div class="project_form">
        <h1>Enter Project</h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <!-- main image -->
        <label for="project_image">image of project</label>
        <input type="file" id="project_image" name="project_image" accept="image/*" required><br><br>

        <!-- image one -->
        <label for="image_one">image one</label>
        <input type="file" id="image_one" name="image_one" accept="image/*" ><br><br>

        <!-- image two -->
        <label for="image_two">image two</label>
        <input type="file" id="image_two" name="image_two" accept="image/*" ><br><br>

        <!-- image three -->
        <label for="image_three">image three</label>
        <input type="file" id="image_three" name="image_three" accept="image/*" ><br><br>

        <label for="time_stamp">time of the project</label>
        <input type="date" id="time_stamp" name="time_stamp" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

        <label for="tech">Technologies Used:</label><br>
        <input type="text" id="tech" name="tech" required><br><br>

        <input type="submit" value="Submit">
    </div>

</form>




<!-- footer de la page -->


</body>
</html>