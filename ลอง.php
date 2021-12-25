<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Function</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<input type="text" >
						<?php
					

							$weight = 7;
							$height = 45;
							

							if ($height == 0){
							$whi = "" ;
							}else if ($height == 45){
                                if ($weight == 2.5){
                                    $whi = "สมส่วน" ;
                                    }else if ($weight == 2.9){
                                        $whi = "อ้วนมาก";
                                    } else if ($weight >= 6.6){
                                        $whi = "อ้วน";
                                    }else if ($weight >= 5.8){
                                        $wei = "ค่อนข้างอ้วน";
                                    }else if ($weight >= 5.1){
                                        $wei = "น้ำหนักปกติ";
                                    }else if ($weight >= 4.5){
                                        $wei = "น้ำหนักปกติ";
                                    }else if ($weight >= 3.9){
                                        $wei = "ค่อนข้างน้อย";
                                    }else if ($weight >= 3.4){
                                        $wei = "ผอม";
                                    }else {
                                        $wei = "ผอมมาก";}}
								
										
										if ($weight==0){
										$wei = "";
										}else if ($weight >= 7){
											$wei = "อ้วน";
						
									} else if ($weight >= 6.6){
								$wei = "อ้วน";
							}else if ($weight >= 5.8){
								$wei = "ค่อนข้างอ้วน";
							}else if ($weight >= 5.1){
								$wei = "น้ำหนักปกติ";
							}else if ($weight >= 4.5){
								$wei = "น้ำหนักปกติ";
							}else if ($weight >= 3.9){
								$wei = "ค่อนข้างน้อย";
							}else if ($weight >= 3.4){
								$wei = "ผอม";
							}else {
								$wei = "ผอมมาก";}


								if ($height == 0){
									$hi = "" ;
									}else if ($height >= 7.5){
										$hi = "สูงมาก";
									} else if ($height >= 6.6){
										$hi = "สูง";
									}else if ($height >= 5.8){
										$hi = "ค่อนข้างสูง";
									}else if ($height >= 5.1){
										$hi = "ส่วนสูงตามเกณฑ์";
									}else if ($height >= 4.5){
										$hi = "ตามเกน";
									}else if ($height >= 3.9){
										$hi = "ค่อนข้างเตี้ย";
									}else if ($height >= 3.4){
										$hi = "เตี้ย";
									}else {
										$hi = "เตี้ยมาก";}


										


		
					echo "<h2 class='mb-2'> น้ำหนัก {$weight} กก. สูง {$height} ซม. </h2>";
	 	            echo "<h1 class='mb-5'>คุณ{$wei} . ความสูง{$hi} .     เทียบ {$whi}</h1>";

							
						?>

		
</body>
</html>

