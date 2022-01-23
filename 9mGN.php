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
							}else if ($weight >= 12.1){
								$wei = "Percentile 999 ";		
							} else if ($weight >= 11){
								$wei = "Percentile 99";
							}else if ($weight >= 10.4){
								$wei = "Percentile 97";
							}else if ($weight >= 10.1){
								$wei = "Percentile 95";
                            }else if ($weight >= 9.6){
								$wei = "Percentile 90 ";
                            }else if ($weight >= 9.3){
								$wei = "Percentile 85 ";
                            }else if ($weight >= 8.9){
								$wei = "Percentile 75 ";
                            }else if ($weight >= 8.2){
								$wei = "Percentile 50 ";
                            }else if ($weight >= 7.6){
								$wei = "Percentile 25 ";
                            }else if ($weight >= 7.3){
								$wei = "Percentile 15 ";
                            }else if ($weight >= 7.0){
								$wei = "Percentile 10 ";
                            }else if ($weight >= 6.8){
								$wei = "Percentile 5 ";
                            }else if ($weight >= 6.6){
								$wei = "Percentile 3 ";
                            }else if ($weight >= 6.2){
								$wei = "Percentile 1 ";
							}else {
								$wei = "Percentile 0";}

								// ส่วนสูงเทียบอายุ
								if ($height == 0){
									$hi = "" ;
									}else if ($height >= 77.6){
										$hi = "Percentile 999";
                                    }else if ($height >= 75.8){
										$hi = "Percentile 99";
                                    }else if ($height >= 74.7){
										$hi = "Percentile 97";
                                    }else if ($height >= 74.1){
										$hi = "Percentile 95";
                                    }else if ($height >= 73.2){
										$hi = "Percentile 90";
                                    }else if ($height >= 72.6){
										$hi = "Percentile 85";
                                    }else if ($height >= 71.8){
										$hi = "Percentile 75";
                                    }else if ($height >= 70.1){
										$hi = "Percentile 50";
                                    }else if ($height >= 68.5){
										$hi = "Percentile 25";
                                    }else if ($height >= 67.6){
										$hi = "Percentile 15";
                                    }else if ($height >= 67){
										$hi = "Percentile 10";
									} else if ($height >= 66.2){
										$hi = "Percentile 5";
									}else if ($height >= 65.6){
										$hi = "Percentile 3";
									}else if ($height >= 64.5){
										$hi = "Percentile 1";
									}else {
										$hi = "Percentile 0";}

								// เส้นรอบศรีษะ
								if ($head == 0){
									$had = "" ;
									}else if ($head >= 48){
										$had = "Percentile 999";
                                    }else if ($head >= 46.9){
										$had = "Percentile 99";
                                    }else if ($head >= 46.3){
										$had = "Percentile 97";
                                    }else if ($head >= 46){
										$had = "Percentile 95";
                                    }else if ($head >= 45.5){
										$had = "Percentile 90";
                                    }else if ($head >= 45.2){
										$had = "Percentile 85";
                                    }else if ($head >= 44.7){
										$had = "Percentile 75";
                                    }else if ($head >= 43.8){
										$had = "Percentile 50";
                                    }else if ($head >= 42.9){
										$had = "Percentile 25";
                                    }else if ($head >= 42.4){
										$had = "Percentile 15";
                                    }else if ($head >= 42.1){
										$had = "Percentile 10";
									} else if ($head >= 41.6){
										$had = "Percentile 5";
									}else if ($head>= 41.3){
										$had = "Percentile 3";
									}else if ($head >= 40.7){
										$had = "Percentile 1";
									}else {
										$had = "Percentile 0";}		


										


		
					echo "<h2 class='mb-2'> น้ำหนัก {$weight} กก. สูง {$height} ซม.  เส้นรอบศีรษะ {$head} ซม.</h2>";
	 	            echo "<h1 class='mb-5'>น้ำหนักเทียบกับอายุอยู่ที่{$wei} . ความสูงเทียบกับอายุอยู่ที่{$hi} .       เส้นรอบศีรษะอยู่ที่{$had}  </h1>";

							
						?>

		
</body>
</html>

