<html> 
<head>
<?php
  $queue=$_GET['queue'];
 echo "<meta http-equiv='refresh' content='5;url=qstats.php?queue=$queue'>";
?>
 <title>D-PBX Queue Monitor</title>

  <style type="text/css">
  td.large {
  color:red;
  text-align:center;
  font-size:36pt;
  }
  </style>

  <style type="text/css">
  td.medium {
  color:red;
  text-align:center;
  font-size:18pt;
  }
  </style>

  <style type="text/css">
  tr.heading {
  color:blue;
  text-align:center;
  font-size:26pt;
  }
  </style>

  <style type="text/css">
  tr.heading-medium {
  color:blue;
  text-align:center;
  font-size:16pt;
  }
  </style>

</head>
 <body>

<?php
  $queue=$_GET['queue'];
  require_once('./phpagi/phpagi-asmanager.php');

$myfile = '/etc/asterisk/queues_additional.conf';
echo "<form id='queue' action='queue_status.php' method='GET'>";
$lines = file($myfile);    
 echo "Select the queue - ";
foreach($lines as $queues){
 if (preg_match("/]/i", $queues)) {
 echo "<button name='queue' type='submit' value='".substr($queues, 1, -2)."'>".substr($queues, 1, -2)."</button>";
 }
}
echo "</form>";
echo "<br/>";

  $asm = new AGI_AsteriskManager();
  if($asm->connect())
  {
    $result = $asm->Command("queue show $queue");

// ECHO THE QUEUE STATUS FIRST

    if(!strpos($result['data'], ':'))
      echo $peer['data'];
    else
    {
      $data = array();
      echo "<table border='1'; cellpadding=6pt;>";
      echo "<tr class='heading';><td>Queue Number</td><td>Calls in queue</td><td>Answered calls</td><td>Abandoned calls</td><td>Average hold time</td><td>Average talk time</td></tr>";
      foreach(explode("\n", $result['data']) as $line)
      {
         if (preg_match("/talktime/i", $line)) {
          echo "<tr>";
          $pieces = explode(" ", $line);
          echo "<td class='large';>$pieces[0] </td>";
          echo "<td class='large';>$pieces[2] </td> ";
          echo "<td class='large';>".trim($pieces[14], "C:,")."</td> ";
          echo "<td class='large';>".trim($pieces[15], "A:,")."</td> ";
          echo "<td class='large';>".trim($pieces[9], "(s")." </td> ";
          echo "<td class='large';>".trim($pieces[11], "s")." </td> ";
          echo "</tr>";
         }
      }
      echo "</table>";
    }

// Create two columns
echo "<br /><table border='0'>";
echo "<tr><td width=400px;>";

// ECHO THE CALLS WAITING

   echo "<h3><u>Calls waiting</u></h3>";

    if(!strpos($result['data'], ':'))
      echo $peer['data'];
    else
    {
      $data = array();
      echo "<table border='1'; cellpadding=6pt;>";
      echo "<tr class='heading-medium';><td>Position</td><td>Call wait time</td></tr>";

      foreach(explode("\n", $result['data']) as $line)
      {

         if (preg_match("/wait/i", $line)) {
          $pieces2 = explode(" ", $line);
          echo "<tr>";
          echo "<td class='medium';>".trim($pieces2[6], ".")." </td> ";
          echo "<td class='medium';>".trim($pieces2[10], ",")." </td> ";
          echo "</tr>";
      }

      }
      echo "</table>";
    }

echo "</td><td>";

// ECHO AGENTS ON A CALL

   echo "<h3><u>Agents on a call</u></h3>";

    if(!strpos($result['data'], ':'))
      echo $peer['data'];
    else
    {
      $data = array();
      echo "<table border='1'; cellpadding=6pt;>";
      echo "<tr class='heading-medium';><td>Agent ID</td><td>On call for (seconds)</td><td>Calls today</td></tr>";
      foreach(explode("\n", $result['data']) as $line)
      {
         if (preg_match("/Busy/i", $line)) {
          $pieces2 = explode(" ", $line);
          echo "<tr>";
          echo "<td class='medium';> ".trim($pieces2[6], "Agent/")." </td> ";
          echo "<td class='medium';>$pieces2[14] </td> ";
          echo "<td class='medium';>$pieces2[10] </td> ";
          echo "</tr>";
         }
      }
      echo "</table>";
    }

echo "</td></tr></table>";

// Create two columns
echo "<br /><table border='0'>";
echo "<tr><td width=600px;>";

// ECHO AGENTS AVAILABLE

   echo "<h3><u>Agent logged in and available</u></h3>";

    if(!strpos($result['data'], ':'))
      echo $peer['data'];
    else
    {
      $data = array();
      echo "<table border='1'; cellpadding=6pt;>";
      echo "<tr class='heading-medium';><td>Agent ID</td><td>Last call taken (seconds ago)</td><td>Calls today</td></tr>";
      foreach(explode("\n", $result['data']) as $line)
      {
         if (preg_match("/Not in use/i", $line)) {
          if (preg_match("/Agent/i", $line)) {
           if (!preg_match("/paused/i", $line)) {
           $pieces2 = explode(" ", $line);
           echo "<tr>";
           echo "<td class='medium';> ".trim($pieces2[6], "Agent/")." </td> ";
           echo "<td class='medium';>$pieces2[16] </td> ";
           echo "<td class='medium';>$pieces2[12] </td> ";
           echo "</tr>";
           }
          }
         }
      }
      echo "</table>";
    }

echo "</td><td>";

// ECHO AGENT ON BREAK

   echo "<h3><u>Agents on break </u></h3>";

    if(!strpos($result['data'], ':'))
      echo $peer['data'];
    else
    {
      $data = array();
      echo "<table border='1'; cellpadding=6pt;>";
      echo "<tr class='heading-medium';><td>Agent ID</td><td>Last call taken (seconds ago)</td><td>Calls today</td></tr>";
      foreach(explode("\n", $result['data']) as $line)
      {
         if (preg_match("/Not in use/i", $line)) {
           if (preg_match("/paused/i", $line)) {
           $pieces2 = explode(" ", $line);
           echo "<tr>";
           echo "<td class='medium';> ".trim($pieces2[6], "Agent/")." </td> ";
           echo "<td class='medium';>$pieces2[17] </td> ";
           echo "<td class='medium';>$pieces2[13] </td> ";
           echo "</tr>";
           }
         }
      }
      echo "</table>";
    }

echo "</td></tr></table>";
    $asm->disconnect();
  }
?>

</body>
</html>
