$query = "SELECT nazwa, cena, dlugosc, isbn, autor, jezyk FROM videokursy WHERE nazwa = '".mysqli_real_escape_string($conn, $_GET['nameOfSearchedProduct'])."'";
    $results = mysqli_query($conn, $query) or die ("nie udalo się");
    if ($results)
    {
        echo "<table>";
        while ($row = mysqli_fetch_array($results,MYSQLI_ASSOC))
        {
            foreach($row as $key => $value)
            {
            echo "<tr>";
            if ($key == "cena")
                echo '<td class ="etykieta">Cena: </td><td>'.$value.'</td>';
            else if ($key == "nazwa")
                echo '<td class ="etykieta">Nazwa: </td><td>'.$value.'</td>';
            else if ($key == "dlugosc")
                echo '<td class ="etykieta">Długość: </td><td>'.$value.'</td>';
            else if ($key == "isbn")
                echo '<td class ="etykieta">ISBD: </td><td>'.$value.'</td>';
            else if ($key == "autor")
                echo '<td class ="etykieta">Autor: </td><td>'.$value.'</td>'; 
            else if ($key == "jezyk")
                echo '<td class ="etykieta">Język: </td><td>'.$value.'</td>';
            
            echo "</tr>";
        }
        }
        
        echo "</table>";
    }
