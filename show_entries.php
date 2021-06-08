
<?php
$guestbook = new GuestbookAccess();
$table = $guestbook->getEntries();


if ($table) { // Check if there are enrtries
    echo '<table class="table table-striped table-bordered table-hover">'; 
    echo "<tr><th>Index</th><th>Name</th><th>Date</th><th>Comment</th></tr>"; 

    foreach ($table as $row ) {
        // Output each element

        $index = $row["Index"];
        $name = $row["Name"];
        $date = $row["Date"];
        $email = $row["eMail"];
        $comment = $row["Comment"];

		echo "<tr><td>"; 
        echo $index;
        echo "</td><td>";  
        echo "$name";
        echo "</td><td>";  
        echo "$date";
        echo "</td><td>";  
        echo "$comment\n";
        echo "</td>";  
    }
    echo "</table>";  
} else {
    echo "\nGuest book is empty\n";
}
?>