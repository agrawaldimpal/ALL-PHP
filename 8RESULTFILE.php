<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $name = "priya";
        $hindi = 40;
        $english= 50;
        $math=60;
        $sst=50;
        $sci=70;
        $total = $hindi+$english+$math+$sst+$sci;
        //    echo $total;


        $name1 ="Bhardwaj";
        $hindi1= 60;
        $english1=70;
        $math1=70;
        $sci1=80;
        $sst1=90;
        $total1= $hindi1+$english1+$math1+$sci1+$sst1;
    
        $name2= "Prabhakar";
        $hindi2=70;
        $english2=80;
        $math2=80;
        $sst2=90;
        $sci2=70;
        $total2=$hindi2+$english2+$math2+$sci2+$sst2;
   
   
   ?>

     <table border="1">
        <tr>
            <th>NAME</th>            <th>HINDI</th>
            <th>ENGLISH</th>
            <th>MATHS</th>
            <th>SST</th>
            <th>SCI</th>
            <th>TOTAL</th>

        </tr>
         <tr>
            <td><?php echo $name   ?></td>
            <td><?php echo $hindi   ?></td>
            <td><?php echo $english   ?></td>
            <td><?php echo  $math   ?></td>
            <td><?php echo $sst   ?></td>
            <td><?php echo  $sci   ?></td>
            <td><?php echo $total  ?></td>

         </tr>

         <tr>
            <td><?php echo $name1   ?></td>
            <td><?php echo $hindi1   ?></td>
            <td><?php echo $english1   ?></td>
            <td><?php echo  $math1   ?></td>
            <td><?php echo $sst1   ?></td>
            <td><?php echo  $sci1   ?></td>
            <td><?php echo $total1  ?></td>

         </tr>
         <tr>
            <td><?php echo $name2  ?></td>
            <td><?php echo $hindi2   ?></td>
            <td><?php echo $english2   ?></td>
            <td><?php echo  $math2   ?></td>
            <td><?php echo $sst2   ?></td>
            <td><?php echo  $sci2   ?></td>
            <td><?php echo $total2  ?></td>

         </tr>
     </table>



 </body>
 </html>