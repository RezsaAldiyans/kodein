<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="5">Beginner</th>
        </tr>
        <tr>
            <th>Rank</th>
            <th>Nama Lengkap</th>
            <th>Level</th>
            <th>Exp</th>
            <th>Badges</th>
        </tr>
        <tr>
            <?php
                $no = 0;
                foreach($data as $beginner){
                    if($beginner["badges"] == "beginner"){
                        $no++;
                        if($no <= 10){
                            echo "<tr>";
                            echo "<th>".$no."</th>";
                            echo "<th>".ucfirst($beginner["nama_lengkap"])."</th>";
                            echo "<th>$beginner[level]</th>";
                            echo "<th>$beginner[exp]</th>";
                            echo "<th>".ucfirst($beginner["badges"])."</th>";
                            echo "</tr>";
                        }
                    }
                }
            ?>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <th colspan="4">Intermediate</th>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <th>Level</th>
            <th>Exp</th>
            <th>Badges</th>
        </tr>
        <?php
            foreach($data as $beginner){
                if($beginner["badges"] == "intermediate"){
                    echo "<tr>";
                    echo "<th>".ucfirst($beginner["nama_lengkap"])."</th>";
                    echo "<th>$beginner[level]</th>";
                    echo "<th>$beginner[exp]</th>";
                    echo "<th>".ucfirst($beginner["badges"])."</th>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
    <br>
    <table border="1">
        <tr>
            <th colspan="4">Professional</th>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <th>Level</th>
            <th>Exp</th>
            <th>Badges</th>
        </tr>
        <tr>
        <?php
            foreach($data as $beginner){
                if($beginner["badges"] == "professional"){
                    echo "<tr>";
                    echo "<th>".ucfirst($beginner["nama_lengkap"])."</th>";
                    echo "<th>$beginner[level]</th>";
                    echo "<th>$beginner[exp]</th>";
                    echo "<th>".ucfirst($beginner["badges"])."</th>";
                    echo "</tr>";
                }
            }
        ?>
        </tr>
    </table>
</body>
</html>