<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kontak Umrah</title>
</head>
<body>
    <h1>Form Kontak Umrah</h1>
    <form action="/contact/submit" method="post">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Nomor Telepon:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
