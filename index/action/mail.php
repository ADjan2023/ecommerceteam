<?php
																				if (isset($_POST['sendmail'])) {
																					require '../dash/PHPMailerAutoload.php';
																					require '../dash/credential.php';

																					$mail = new PHPMailer;

																					$mail->SMTPDebug = 4;                               // Enable verbose debug output

																					$mail->isSMTP();                                      // Set mailer to use SMTP
																					$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
																					$mail->SMTPAuth = true;                               // Enable SMTP authentication
																					$mail->Username = EMAIL;                 // SMTP username
																					$mail->Password = PASS;                           // SMTP password
																					$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
																					$mail->Port = 587;
																					$mail->SMTPDebug  = SMTP::DEBUG_OFF;                                // TCP port to connect to

																					$mail->setFrom(EMAIL, 'LaundryMen');
																					$mail->addAddress($_POST['email']);     // Add a recipient

																					$mail->addReplyTo(EMAIL);

																					$mail->isHTML(true);                                  // Set email format to HTML

																					$mail->Subject = "{$_POST['subject']} from LaundryMen";
																					$mail->Body    = "<h3>From {$_POST["name"]}</h3> 
										<br><p style=font-size:18px;>{$_POST["name"]} Phone number is :{$_POST['phone']}</p>
										<br><p style=font-size:18px;>{$_POST['message']}</p>";


																					if (!$mail->send()) {
																						echo 'Message could not be sent.';
																						echo 'Mailer Error: ' . $mail->ErrorInfo;
																					} else {
																						echo "<script> location.href='message.php'; </script>";
																					}
																				}
																				?>