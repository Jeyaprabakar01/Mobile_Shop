<?php
										$na=$_POST["name"];
										$email=$_POST["email"];
										$sub=$_POST["subject"];
										$mess=$_POST["message"];
										
						$to      = 'ej.prabakar@gmail.com';
						$subject = 'Order Registration - Customer Information';

						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";$headers .= 'To: ' . $to . "\r\n";
					
						$message = 'Name :-'. $na .'<br> Email :- '. $email .'<br> Message :-'.$mess;

						mail($to, $subject, $message, $headers);
									
										($na);
										($email);
										($sub);
										($mess);	


						echo "Your information sent to company -  Thank you";							
										?>