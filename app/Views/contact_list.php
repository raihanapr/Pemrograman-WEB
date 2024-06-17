<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
</head>
<body>
    <h1>Contact List</h1>
    <a href="<?= site_url('/contact/create') ?>">Create New Contact</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Vehicle</th>
            <th>Service</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        <?php foreach($contacts as $contact): ?>
        <tr>
            <td><?= $contact['id'] ?></td>
            <td><?= $contact['name'] ?></td>
            <td><?= $contact['email'] ?></td>
            <td><?= $contact['phone'] ?></td>
            <td><?= $contact['vehicle'] ?></td>
            <td><?= $contact['service'] ?></td>
            <td><?= $contact['message'] ?></td>
            <td>
                <a href="<?= site_url('/contact/edit/'.$contact['id']) ?>">Edit</a>
                <a href="<?= site_url('/contact/delete/'.$contact['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
