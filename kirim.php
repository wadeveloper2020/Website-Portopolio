<?php
  
        $tujuan=$_POST['tujuan'];
        $subjek=$_POST['subjek'];
        $pesan=$_POST['pesan'];

        include "classes/class.phpmailer.php";
        $mail = new PHPMailer; 
        $mail->IsSMTP();
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = "smtp.gmail.com"; //host email
        $mail->SMTPDebug = 0;
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = 'wa.dev2020@gmail.com'; //user email
        $mail->Password = 'Wahyu_007'; //password email 
        $mail->SetFrom('wa.dev2020@gmail.com','Wahyudin'); //set email pengirim
        $mail->Subject = $subjek; //subyek email
        $mail->AddAddress($tujuan);  // email tujuan
        $mail->MsgHTML($pesan); //pesan


        if($mail->Send()){
          // echo "Pesan berhasil terkirim!";
          echo "<script>alert('Kirim Pesan Sukses')</script>";
          // echo "<meta http-equiv='refresh' content='0; url=index.html'>";
        }else
        echo "Pesan gagal terkirim !"
          // echo "<script>alert('GAGAL')</script>";
          // echo "<meta http-equiv='refresh' content='0; url=index.html'>";
    ?>

<!-- Elseif Channel -->