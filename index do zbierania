 $query = "SELECT nazwa FROM videokursy";
    $results = mysqli_query($conn, $query) or die ("Nie udało się pobrać danych z bazy danych");
    if ($results)
    {
        while ($row = mysqli_fetch_array($results,MYSQLI_ASSOC))
            foreach ($row as $key => $value)
                echo '<div class="towar"><div class="rozwin">[+] <span class="naglowek">'.$value.'</span></div><div class="tresc_rozwijana"></div></div>';
    }
    echo '
		</div>
