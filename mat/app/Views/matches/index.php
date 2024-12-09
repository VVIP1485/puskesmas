<h1>Matches</h1>
<a href="/matches/create">Create Match</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Tournament</th>
        <th>Team 1</th>
        <th>Team 2</th>
        <th>Date</th>
        <th>Result</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($matches as $match): ?>
    <tr>
        <td><?= $match['id'] ?></td>
        <td><?= $match['tournament_name'] ?></td>
        <td><?= $match['team1_name'] ?></td>
        <td><?= $match['team2_name'] ?></td>
        <td><?= $match['match_date'] ?></td>
        <td><?= $match['result'] ?></td>
        <td>
            <a href="/matches/edit/<?= $match['id'] ?>">Edit</a> | 
            <a href="/matches/delete/<?= $match['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
