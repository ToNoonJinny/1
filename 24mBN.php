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
					

							$weight = 2;
							$height = 60;
							$head =36;

				
								
							// น้ำหนักเทียบอายุ			
							if ($weight==0){
								$wei = "";
							}else if ($weight >= 17.3){
								$wei = "Percentile 999 ";		
							} else if ($weight >= 15.9){
								$wei = "Percentile 99";
							}else if ($weight >= 15.1){
								$wei = "Percentile 97";
							}else if ($weight >= 14.7){
								$wei = "Percentile 95";
                            }else if ($weight >= 14.1){
								$wei = "Percentile 90 ";
                            }else if ($weight >= 13.7){
								$wei = "Percentile 85 ";
                            }else if ($weight >= 13.1){
								$wei = "Percentile 75 ";
                            }else if ($weight >= 12.2){
								$wei = "Percentile 50 ";
                            }else if ($weight >= 11.3){
								$wei = "Percentile 25 ";
                            }else if ($weight >= 10.8){
								$wei = "Percentile 15 ";
                            }else if ($weight >= 10.5){
								$wei = "Percentile 10 ";
                            }else if ($weight >= 10.1){
								$wei = "Percentile 5 ";
                            }else if ($weight >= 9.8){
								$wei = "Percentile 3 ";
                            }else if ($weight >=9.3){
								$wei = "Percentile 1 ";
							}else {
								$wei = "Percentile 0";}

								// ส่วนสูงเทียบอายุ
								if ($height == 0){
									$hi = "" ;
									}else if ($height >= 97.3){
										$hi = "Percentile 999";
                                    }else if ($height >= 94.9){
										$hi = "Percentile 99";
                                    }else if ($height >= 93.6){
										$hi = "Percentile 97";
                                    }else if ($height >= 92.8){
										$hi = "Percentile 95";
                                    }else if ($height >= 91.7){
										$hi = "Percentile 90";
                                    }else if ($height >= 91){
										$hi = "Percentile 85";
                                    }else if ($height >= 89.9){
										$hi = "Percentile 75";
                                    }else if ($height >= 87.8){
										$hi = "Percentile 50";
                                    }else if ($height >= 85.8){
										$hi = "Percentile 25";
                                    }else if ($height >= 84.6){
										$hi = "Percentile 15";
                                    }else if ($height >= 83.9){
										$hi = "Percentile 10";
									} else if ($height >= 82.8){
										$hi = "Percentile 5";
									}else if ($height >= 82.1){
										$hi = "Percentile 3";
									}else if ($height >= 80.7){
										$hi = "Percentile 1";
									}else {
										$hi = "Percentile 0";}

								// เส้นรอบศรีษะ
								if ($head == 0){
									$had = "" ;
									}else if ($head >= 52.5){
										$had = "Percentile 999";
                                    }else if ($head >= 51.4){
										$had = "Percentile 99";
                                    }else if ($head >= 50.8){
										$had = "Percentile 97";
                                    }else if ($head >= 50.5){
										$had = "Percentile 95";
                                    }else if ($head >= 50){
										$had = "Percentile 90";
                                    }else if ($head >= 49.7){
										$had = "Percentile 85";
                                    }else if ($head >= 49.2){
										$had = "Percentile 75";
                                    }else if ($head >= 48.3){
										$had = "Percentile 50";
                                    }else if ($head >= 47.3){
										$had = "Percentile 25";
                                    }else if ($head >= 46.8){
										$had = "Percentile 15";
                                    }else if ($head >= 46.5){
										$had = "Percentile 10";
									} else if ($head >= 46){
										$had = "Percentile 5";
									}else if ($head>= 45.7){
										$had = "Percentile 3";
									}else if ($head >= 45.1){
										$had = "Percentile 1";
									}else {
										$had = "Percentile 0";}		


										


		
					echo "<h2 class='mb-2'> น้ำหนัก {$weight} กก. สูง {$height} ซม.  เส้นรอบศีรษะ {$head} ซม.</h2>";
	 	            echo "<h1 class='mb-5'>น้ำหนักเทียบกับอายุอยู่ที่{$wei} . ความสูงเทียบกับอายุอยู่ที่{$hi} .       เส้นรอบศีรษะอยู่ที่{$had}  </h1>";

							
						?>

		
</body>
</html>

Z