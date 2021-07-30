<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password)
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT slno FROM avbooks ORDER BY slno ASC");
?>
<div class="search-box">
    <select id="Place" name="country[]" multiple="multiple">
        <option value="0" selected="selected">Select slno</option>
        <?php
            if (! empty($countryResult)) {
                 foreach ($countryResult as $key => $value) {
                     echo '<option value="' . $countryResult[$key]['slno'] . '">' . $countryResult[$key]['slno'] . '</option>';
                 }
             }
        ?>
    </select>
    <button id="Filter">Search</button>
</div>
<?php
if (! empty($_POST['slno'])) {
    ?>
<table cellpadding="10" cellspacing="1">

    <thead>
        <tr>
            <th><strong>Slno</strong></th>
            <th><strong>Book Name</strong></th>
            <th><strong>Author</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = "SELECT * from avbooks";
    $i = 0;
    $selectedOptionCount = count($_POST['slno']);
    $selectedOption = "";
    while ($i < $selectedOptionCount) {
        $selectedOption = $selectedOption . "'" . $_POST['slno'][$i] . "'";
        if ($i < $selectedOptionCount - 1) {
            $selectedOption = $selectedOption . ", ";
        }
        
        $i ++;
    }
    $query = $query . " WHERE slno in (" . $selectedOption . ")";
    
    $result = $db_handle->runQuery($query);
}
if (! empty($result)) {
    foreach ($result as $key => $value) {
        ?>
        <tr>
            <td><div class="col" id="user_data_1">
                    <?php echo $result[$key]['author']; ?>
                </div></td>
            <td><div class="col" id="user_data_2">
                    <?php echo $result[$key]['title']; ?>
                </div></td>
            <td><div class="col" id="user_data_3">
                    <?php echo $result[$key]['slno']; ?>
                </div></td>
        </tr>
        <?php
    }
    ?>

    </tbody>
</table>