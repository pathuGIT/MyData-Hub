<?php require_once('../inc/header.php')?>
<?php require_once('../inc/connect.php')?>

<?php
$january = "SELECT * FROM data WHERE birthday >'2023-01-00' AND birthday < '2023-02-01'";
$february = "SELECT * FROM data WHERE birthday >'2023-02-00' AND birthday < '2023-03-01'";
$march = "SELECT * FROM data WHERE birthday >'2023-03-00' AND birthday < '2023-04-01'";
$april = "SELECT * FROM data WHERE birthday >'2023-04-00' AND birthday < '2023-05-01'";
$may = "SELECT * FROM data WHERE birthday >'2023-05-00' AND birthday < '2023-06-01'";
$juny = "SELECT * FROM data WHERE birthday >'2023-06-00' AND birthday < '2023-07-01'";
$july = "SELECT * FROM data WHERE birthday >'2023-07-00' AND birthday < '2023-08-01'";
$agaust = "SELECT * FROM data WHERE birthday >'2023-08-00' AND birthday < '2023-09-01'";
$september = "SELECT * FROM data WHERE birthday >'2023-09-00' AND birthday < '2023-10-01'";
$octomber = "SELECT * FROM data WHERE birthday >'2023-10-00' AND birthday < '2023-11-01'";
$november = "SELECT * FROM data WHERE birthday >'2023-11-00' AND birthday < '2023-12-01'";
$december = "SELECT * FROM data WHERE birthday >'2023-12-00' AND birthday < '2023-12-31'";


$R_january = mysqli_num_rows(mysqli_query($conn,$january));
$R_february = mysqli_num_rows(mysqli_query($conn,$february));
$R_march = mysqli_num_rows(mysqli_query($conn,$march));
$R_aprill = mysqli_num_rows(mysqli_query($conn,$april));
$R_may = mysqli_num_rows(mysqli_query($conn,$may));
$R_juny = mysqli_num_rows(mysqli_query($conn,$juny));
$R_jully = mysqli_num_rows(mysqli_query($conn,$july));
$R_agaust = mysqli_num_rows(mysqli_query($conn,$agaust));
$R_september = mysqli_num_rows(mysqli_query($conn,$september));
$R_octomber = mysqli_num_rows(mysqli_query($conn,$octomber));
$R_november = mysqli_num_rows(mysqli_query($conn,$november));
$R_december = mysqli_num_rows(mysqli_query($conn,$december));
?>

        <div class="mainHome">
            <div class="box-1">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                labels: ['January', 'February', 'March', 'Aprill', 'May', 'June', 'July', 'August', 'September', 'Octomber', 'November', 'December'],
                datasets: [{
            
                    label: ' No of birthday peoples in this month',
                    // data: [5,4,8,7,4,1,3,6,15,9,7,12],
                    data: ["<?php echo $R_january; ?>", "<?php echo $R_february; ?>", "<?php echo $R_march; ?>", "<?php echo $R_aprill; ?>", "<?php echo $R_may; ?>", "<?php echo $R_juny; ?>", "<?php echo $R_jully; ?>", "<?php echo $R_agaust; ?>", "<?php echo $R_september; ?>", "<?php echo $R_octomber; ?>", "<?php echo $R_november; ?>", "<?php echo $R_december; ?>"],
                    borderWidth: 1,
                    backgroundColor: [
                        'darkred',
                        'purple',
                        'lightblue',
                        'grey',
                        'green',
                        'palevioletred',
                        'red',
                        'lightgreen',
                        'darkblue',
                        'pink',
                        'yellow',
                        'blue'
                    ]
                }]
                }
            });
    </script>
</body>
</html>