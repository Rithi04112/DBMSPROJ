<html>
  <head>
    <meta charset="UTF-8" />
    <title>Feedback Details</title>
    <link rel="stylesheet" href="css/styles2.css" />
  </head>

 
    <?php
    include 'php/config.php';
  $sql="select * from feed where subject ='DSA' ";
  $result=mysqli_query($connection,$sql);
  echo "<table border='1' id='students-table'>
  <tr>
     <th>Name</th>
      <th>Year</th>
      <th>Sem</th>
      <th>Date</th>
      <th>Branch</th>
      <th>Section</th>
      <th>Subject</th>
      <th>Ques1</th>
      <th>Ques-2i</th>
      <th>Ques-2ii</th>
      <th>Ques-2iii</th>
      <th>Ques-2iv</th>
      <th>Ques-2v</th>
      <th>Ques3</th>
      <th>Ques4</th>
      <th>Remarks</th>
  </tr>";
    if($result)
        {
            while($rows =mysqli_fetch_assoc($result)) {
                echo "<td>".  $rows['Name']."</td>";
                echo "<td>" . $rows['year'] . "</td>";
                echo "<td>" . $rows['sem'] . "</td>";
                echo "<td>" . $rows['date'] . "</td>";
                echo "<td>" . $rows['branch'] . "</td>";
                echo "<td>" . $rows['section'] . "</td>";
                echo "<td>" . $rows['subject'] . "</td>";
                echo "<td>" . $rows['ques1'] . "</td>";
                echo "<td>" . $rows['ques2i'] . "</td>";
                echo "<td>" . $rows['ques2ii'] . "</td>";
                echo "<td>" . $rows['ques2iii'] . "</td>";
                echo "<td>" . $rows['ques2iv'] . "</td>";
                echo "<td>" . $rows['ques2v'] . "</td>";
                echo "<td>" . $rows['ques3'] . "</td>";
                echo "<td>" . $rows['ques4'] . "</td>";
                echo "<td>" . $rows['remarks'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";                                                                    
        }
          
          else{
              echo 'record not found';
          }
           
        ?>
      </body>
    
      </html>
        }