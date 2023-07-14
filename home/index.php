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

$peopleCount = "SELECT * FROM data";
$emailCount = "SELECT * FROM data WHERE email LIKE '%@%' ";
$contactCount = "SELECT * FROM data WHERE contact BETWEEN 1 AND 9999999999";

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

$Count_people = mysqli_num_rows(mysqli_query($conn,$peopleCount));
$Count_email = mysqli_num_rows(mysqli_query($conn,$emailCount));
$Count_contact = mysqli_num_rows(mysqli_query($conn,$contactCount));
?>

        <div class="mainHome">
            <div class="box2">
                <div class="raw1">
                    <div class="line">
                        <div>
                            <h3><?php echo $Count_people ?></h3>
                            <p>Number Of Peoples</p>
                            <p  class="p" id="o1"></p> 
                        </div>
                        <div>
                            <h3><?php echo $Count_email ?></h3>
                            <p>Number Of Emails</p>
                            <p class="p"  id="o2"></p> 
                        </div>
                        <div>
                            <h3><?php echo $Count_contact ?></h3>
                            <p>Number Of Contacts</p>
                            <p class="p"  id="o3"></p> 
                        </div>
                    </div>
                </div>
                <div class="raw2">
                    <h2>Hello Pathum,  </h2>
                    <p><span id="msg1"></span> (:</p>
                    <p>"Effortlessly Find People with MyData-hub Search! Enter a name or related information, and get instant results. Simplify your database management now!"</p>
                </div>
            </div>
            <div class="box1">
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
                    data: [5,4,8,7,4,1,3,6,15,9,7,12],
                    // data: ["<?php echo $R_january; ?>", "<?php echo $R_february; ?>", "<?php echo $R_march; ?>", "<?php echo $R_aprill; ?>", "<?php echo $R_may; ?>", "<?php echo $R_juny; ?>", "<?php echo $R_jully; ?>", "<?php echo $R_agaust; ?>", "<?php echo $R_september; ?>", "<?php echo $R_octomber; ?>", "<?php echo $R_november; ?>", "<?php echo $R_december; ?>"],
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
    <script>
        var date = new Date();
            var time = date.getHours()
            var word;
            if(time>0 && time<=12){
                word = "Good Morning";
            }else if(time>12 && time<=18){
                word = "Good Afternoon";
            }else if(time>18 && time<=24){
                word = "Good Evening";
            }
            document.getElementById('msg1').innerHTML = word;
    </script>
</body>
</html>

<?php mysqli_close($conn); ?>