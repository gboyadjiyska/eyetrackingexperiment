<?php

      if(isset($_POST['userID'])){
        $myfile2 = fopen("temp/userID.txt", "w");
        $userID = $_POST['userID'].";\n";
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile2, $userID);
        }
        header("Location: main.html");

      }

      if(isset($_POST['submit'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }

        //write on a file only the selected ranks
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data1.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: main2.html");
      }




    if(isset($_POST['submit2'])){
      $t=time();
      $myfile1 = fopen("temp/time.txt", "w");
      for ($i = 0; $i <= 5; $i++) {
        fwrite($myfile1, $t.";\n");
      }
      //write on a file only the selected tags
      $ranks = fopen("temp/ranks.txt", "w");
      $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
      fwrite($ranks, $selected_val);

      $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      $second_page_array = file("data/data2.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      $final_array = [];

      foreach($first_page_array as $key=>$first_page){
         $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
      }

      file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
      //delete the content of the temp files
      file_put_contents("temp/ranks.txt", "");
      file_put_contents("temp/time.txt", "");

      header("Location: main3.html");
    }


     if(isset($_POST['submit3'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }
        //write on a file only the selected tags
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data3.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: main4.html");
      }

      if(isset($_POST['submit4'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }
        //write on a file only the selected tags
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data4.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: main5.html");
      }

      if(isset($_POST['submit5'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }
        //write on a file only the selected tags
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data5.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: main6.html");
      }

      if(isset($_POST['submit6'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }
        //write on a file only the selected tags
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data6.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: main7.html");
      }

      if(isset($_POST['submit7'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }
        //write on a file only the selected tags
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data7.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: main8.html");
      }

      if(isset($_POST['submit8'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }
        //write on a file only the selected tags
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data8.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: main9.html");
      }

      if(isset($_POST['submit9'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }
        //write on a file only the selected tags
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data9.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: main10.html");
      }

      if(isset($_POST['submit10'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }
        //write on a file only the selected tags
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data10.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: main11.html");
      }

      if(isset($_POST['submit11'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }
        //write on a file only the selected tags
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data11.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: main12.html");
      }

      if(isset($_POST['submit12'])){
        $t=time();
        $myfile1 = fopen("temp/time.txt", "w");
        for ($i = 0; $i <= 5; $i++) {
          fwrite($myfile1, $t.";\n");
        }
        //write on a file only the selected tags
        $ranks = fopen("temp/ranks.txt", "w");
        $selected_val = $_POST['rank1'].";\n".$_POST['rank2'].";\n".$_POST['rank3'].";\n".$_POST['rank4'].";\n".$_POST['rank5'].";\n".$_POST['rank6'].";";
        fwrite($ranks, $selected_val);

        $ranks_array = file("temp/ranks.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $time_array = file("temp/time.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $first_page_array = file("temp/userID.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $second_page_array = file("data/data12.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $final_array = [];

        foreach($first_page_array as $key=>$first_page){
           $final_array[] = $first_page.''.$second_page_array[$key].''.$ranks_array[$key].''.$time_array[$key]."\n";
        }

        file_put_contents('output.txt',$final_array, FILE_APPEND | LOCK_EX);
        //delete the content of the temp files
        file_put_contents("temp/ranks.txt", "");
        file_put_contents("temp/userID.txt", "");
        file_put_contents("temp/time.txt", "");

        header("Location: success.html");
      }

?>
