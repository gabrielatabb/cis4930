SQL Injection Protection:
All SQL interactions in this assignment use MySQLi prepared statements to prevent SQL injection.
User input is never directly injected into queries. Numeric inputs are cast with (int), and text inputs
are passed through `htmlspecialchars()` to prevent XSS. No raw SQL is built using user input.
