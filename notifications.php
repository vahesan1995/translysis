 <?php
               include "config.php"; 
 				/// notifications for emptyProducts and expiry products
              

                $emptyProducts = Array();
                $expiryProducts = Array();

                 $stockQuery = "SELECT SUM(quantity) as total,productid from `stock` group by productid";
                 $stockQuery = $mysqli->query($stockQuery);
               
                while($stockObj= $stockQuery->fetch_object()){
                    $productId = $stockObj->productid;
                    $quantity = $stockObj->total;

                    $productQuery = "SELECT name,threshold from `product` where productid = $productId";
                	$productQuery = $mysqli->query($productQuery);
                	$productObj = $productQuery->fetch_object();



                    $threshold = $productObj->threshold;
                   
                    if ($quantity < $threshold){
                        $emptyProducts[] = $productObj->name;

                    }

                }

                $stockQuery1 = "SELECT expirydate,productid,stockid from stock";
                $stockQuery1 = $mysqli->query($stockQuery1);
                while ($stockObj1 = $stockQuery1->fetch_object()){
                    

                        $expiryDate = $stockObj1->expirydate;
                    	$productid = $stockObj1->productid;
                        $currentDate = date("Y-m-d");
                        $diff = date_diff(date_create($currentDate), date_create($expiryDate));

                    
                    if ($diff->days < 365) {

                    		 $productQuery1 = "SELECT name from `product` where productid = $productId";
                			 $productQuery1 = $mysqli->query($productQuery1);
                	         $productObj1 = $productQuery1->fetch_object();
                            $notific = "product " . $productObj1->name . " belongs to Stock " . $stockObj1->stockid . "`s expiry fell in one year due";
                            $expiryProducts[] = $notific;

                    }
                }


?>
