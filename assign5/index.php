<!DOCTYPE html>
<html>
<head>
    <title>Sex and the City Quiz</title>
</head>
<body>
<form action="process.php" method="post">
   <label for="name">Your Name:</label>
   <input type="text" id="name" name="name" required>
   <br><br> 
   <p>In season 2, where does Big move without telling Carrie?</p>
   <input type="radio" id="paris" name="q1" value="Paris" required>
   <label for="paris">Paris</label><br>

   <input type="radio" id="london" name="q1" value="London">
   <label for="london">London</label><br>

   <input type="radio" id="berlin" name="q1" value="Berlin">
   <label for="berlin">Berlin</label><br>

   <input type="radio" id="madrid" name="q1" value="Madrid">
   <label for="madrid">Madrin</label><br>

    <p>Which of these are pet names on SATC? (Select all that apply)</p>
    <input type="checkbox" id="elizabeth-taylor" name="names[]" value="Elizabeth Taylor">
    <label for="elizabeth-taylor">Elizabeth Taylor</label><br>

    <input type="checkbox" id="duke" name="names[]" value="Duke">
    <label for="duke">Duke</label><br>

    <input type="checkbox" id="scout" name="names[]" value="Scout">
    <label for="scout">Scout</label><br>

    <input type="checkbox" id="pete" name="names[]" value="Pete">
    <label for="pete">Pete</label><br>

    <input type="checkbox" id="anna-wintour" name="names[]" value="Anna Wintour">
    <label for="anna-wintour">Anna Wintour</label><br>

    <input type="checkbox" id="fatty" name="names[]" value="Fatty">
    <label for="fatty">Fatty</label><br>

    <p>What is Smith Jerrod's original name?</p>
    <select name="og_name" required>
        <option value="" disabled selected>Select an option</option>
        <option value="Windows">Windows</option>
        <option value="Gary Jerrod">Gary Jerrod</option>
        <option value="Jeremy Jerrod">Jeremy Jerrod</option>
        <option value="Jerry Jerrod">Jerry Jerrod</option>
        <option value="Jarvis Jerrod">Jarvis Jerrod</option>
    </select>
    <br><br>

    <button type="reset">Reset</button>
    <button type="submit">Submit</button>

</form>
</body>
</html>