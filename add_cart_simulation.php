<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    include 'includes/session.php';

	$conn = $pdo->open();
    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_SESSION['user'])){
        if($method == "GET"){
            $userid = $_SESSION['user'];
            $switch = $_GET['switch'];
            $preset = $_GET['preset'];
            $bone = $_GET['bone'];
            $quantity = 1;

            $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
            $stmt->execute(['user_id'=>$userid, 'product_id'=>$switch]);
            $row = $stmt->fetch();

            if($row['numrows'] < 1){
                $stmt2 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                $stmt2->execute(['user_id'=>$userid, 'product_id'=>$preset]);
                $row2 = $stmt2->fetch();

                if($row2['numrows'] < 1){
                    $stmt3 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                    $stmt3->execute(['user_id'=>$userid, 'product_id'=>$bone]);
                    $row3 = $stmt3->fetch();

                    if($row3['numrows'] < 1){
                        try{
                            $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                            $stmt4->execute(['user_id'=>$userid, 'product_id'=>$switch, 'quantity'=>$quantity]);
                            $output['message'] = 'Item added to cart';

                            $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                            $stmt4->execute(['user_id'=>$userid, 'product_id'=>$preset, 'quantity'=>$quantity]);
                            $output['message'] = 'Item added to cart';

                            $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                            $stmt4->execute(['user_id'=>$userid, 'product_id'=>$bone, 'quantity'=>$quantity]);
                            $output['message'] = 'Item added to cart';

                            header('location: cart_view.php');
                        }
                        catch(PDOException $e){
                            $output['error'] = true;
                            $output['message'] = $e->getMessage();
                            header('location: cart_view.php');
                        }
                    } else{
                        try{
                            $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                            $stmt4->execute(['user_id'=>$userid, 'product_id'=>$switch, 'quantity'=>$quantity]);
                            $output['message'] = 'Item added to cart';

                            $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                            $stmt4->execute(['user_id'=>$userid, 'product_id'=>$preset, 'quantity'=>$quantity]);
                            $output['message'] = 'Item added to cart';

                            header('location: cart_view.php');
                        }
                        catch(PDOException $e){
                            $output['error'] = true;
                            $output['message'] = $e->getMessage();
                            header('location: cart_view.php');
                        }
                    }
                } else{
                    $stmt3 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                    $stmt3->execute(['user_id'=>$userid, 'product_id'=>$bone]);
                    $row3 = $stmt3->fetch();

                    if($row3['numrows'] < 1){
                        try{
                            $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                            $stmt4->execute(['user_id'=>$userid, 'product_id'=>$switch, 'quantity'=>$quantity]);
                            $output['message'] = 'Item added to cart';

                            $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                            $stmt4->execute(['user_id'=>$userid, 'product_id'=>$bone, 'quantity'=>$quantity]);
                            $output['message'] = 'Item added to cart';

                            header('location: cart_view.php');
                        }
                        catch(PDOException $e){
                            $output['error'] = true;
                            $output['message'] = $e->getMessage();
                            header('location: cart_view.php');
                        }
                    } else{
                        try{
                            $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                            $stmt4->execute(['user_id'=>$userid, 'product_id'=>$switch, 'quantity'=>$quantity]);
                            $output['message'] = 'Item added to cart';

                            header('location: cart_view.php');
                        }
                        catch(PDOException $e){
                            $output['error'] = true;
                            $output['message'] = $e->getMessage();
                            header('location: cart_view.php');
                        }
                    }
                }
                
            }
            else{
                $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                $stmt->execute(['user_id'=>$userid, 'product_id'=>$preset]);
                $row = $stmt->fetch();
    
                if($row['numrows'] < 1){
                    $stmt2 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                    $stmt2->execute(['user_id'=>$userid, 'product_id'=>$bone]);
                    $row2 = $stmt2->fetch();
    
                    if($row2['numrows'] < 1){
                        $stmt3 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                        $stmt3->execute(['user_id'=>$userid, 'product_id'=>$switch]);
                        $row3 = $stmt3->fetch();
    
                        if($row3['numrows'] < 1){
                            try{
                                $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                $stmt4->execute(['user_id'=>$userid, 'product_id'=>$switch, 'quantity'=>$quantity]);
                                $output['message'] = 'Item added to cart';
    
                                $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                $stmt4->execute(['user_id'=>$userid, 'product_id'=>$preset, 'quantity'=>$quantity]);
                                $output['message'] = 'Item added to cart';
    
                                $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                $stmt4->execute(['user_id'=>$userid, 'product_id'=>$bone, 'quantity'=>$quantity]);
                                $output['message'] = 'Item added to cart';
    
                                header('location: cart_view.php');
                            }
                            catch(PDOException $e){
                                $output['error'] = true;
                                $output['message'] = $e->getMessage();
                                header('location: cart_view.php');
                            }
                        } else{
                            try{
                                $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                $stmt4->execute(['user_id'=>$userid, 'product_id'=>$bone, 'quantity'=>$quantity]);
                                $output['message'] = 'Item added to cart';
    
                                $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                $stmt4->execute(['user_id'=>$userid, 'product_id'=>$preset, 'quantity'=>$quantity]);
                                $output['message'] = 'Item added to cart';
    
                                header('location: cart_view.php');
                            }
                            catch(PDOException $e){
                                $output['error'] = true;
                                $output['message'] = $e->getMessage();
                                header('location: cart_view.php');
                            }
                        }
                    } else{
                        $stmt3 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                        $stmt3->execute(['user_id'=>$userid, 'product_id'=>$switch]);
                        $row3 = $stmt3->fetch();
    
                        if($row3['numrows'] < 1){
                            try{
                                $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                $stmt4->execute(['user_id'=>$userid, 'product_id'=>$switch, 'quantity'=>$quantity]);
                                $output['message'] = 'Item added to cart';
    
                                $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                $stmt4->execute(['user_id'=>$userid, 'product_id'=>$preset, 'quantity'=>$quantity]);
                                $output['message'] = 'Item added to cart';
    
                                header('location: cart_view.php');
                            }
                            catch(PDOException $e){
                                $output['error'] = true;
                                $output['message'] = $e->getMessage();
                                header('location: cart_view.php');
                            }
                        } else{
                            try{
                                $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                $stmt4->execute(['user_id'=>$userid, 'product_id'=>$preset, 'quantity'=>$quantity]);
                                $output['message'] = 'Item added to cart';

                                header('location: cart_view.php');
                            }
                            catch(PDOException $e){
                                $output['error'] = true;
                                $output['message'] = $e->getMessage();
                                header('location: cart_view.php');
                            }
                        }
                    }
                    
                }
                else{
                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                    $stmt->execute(['user_id'=>$userid, 'product_id'=>$bone]);
                    $row = $stmt->fetch();
        
                    if($row['numrows'] < 1){
                        $stmt2 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                        $stmt2->execute(['user_id'=>$userid, 'product_id'=>$switch]);
                        $row2 = $stmt2->fetch();
        
                        if($row2['numrows'] < 1){
                            $stmt3 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                            $stmt3->execute(['user_id'=>$userid, 'product_id'=>$preset]);
                            $row3 = $stmt3->fetch();
        
                            if($row3['numrows'] < 1){
                                try{
                                    $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                    $stmt4->execute(['user_id'=>$userid, 'product_id'=>$switch, 'quantity'=>$quantity]);
                                    $output['message'] = 'Item added to cart';
        
                                    $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                    $stmt4->execute(['user_id'=>$userid, 'product_id'=>$preset, 'quantity'=>$quantity]);
                                    $output['message'] = 'Item added to cart';
        
                                    $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                    $stmt4->execute(['user_id'=>$userid, 'product_id'=>$bone, 'quantity'=>$quantity]);
                                    $output['message'] = 'Item added to cart';
        
                                    header('location: cart_view.php');
                                }
                                catch(PDOException $e){
                                    $output['error'] = true;
                                    $output['message'] = $e->getMessage();
                                    header('location: cart_view.php');
                                }
                            } else{
                                try{
                                    $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                    $stmt4->execute(['user_id'=>$userid, 'product_id'=>$bone, 'quantity'=>$quantity]);
                                    $output['message'] = 'Item added to cart';
        
                                    $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                    $stmt4->execute(['user_id'=>$userid, 'product_id'=>$switch, 'quantity'=>$quantity]);
                                    $output['message'] = 'Item added to cart';
        
                                    header('location: cart_view.php');
                                }
                                catch(PDOException $e){
                                    $output['error'] = true;
                                    $output['message'] = $e->getMessage();
                                    header('location: cart_view.php');
                                }
                            }
                        } else{
                            $stmt3 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
                            $stmt3->execute(['user_id'=>$userid, 'product_id'=>$preset]);
                            $row3 = $stmt3->fetch();
        
                            if($row3['numrows'] < 1){
                                try{
                                    $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                    $stmt4->execute(['user_id'=>$userid, 'product_id'=>$preset, 'quantity'=>$quantity]);
                                    $output['message'] = 'Item added to cart';
        
                                    $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                    $stmt4->execute(['user_id'=>$userid, 'product_id'=>$bone, 'quantity'=>$quantity]);
                                    $output['message'] = 'Item added to cart';
        
                                    header('location: cart_view.php');
                                }
                                catch(PDOException $e){
                                    $output['error'] = true;
                                    $output['message'] = $e->getMessage();
                                    header('location: cart_view.php');
                                }
                            } else{
                                try{
                                    $stmt4 = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                                    $stmt4->execute(['user_id'=>$userid, 'product_id'=>$bone, 'quantity'=>$quantity]);
                                    $output['message'] = 'Item added to cart';
        
                                    header('location: cart_view.php');
                                }
                                catch(PDOException $e){
                                    $output['error'] = true;
                                    $output['message'] = $e->getMessage();
                                    header('location: cart_view.php');
                                }
                            }
                        }
                        
                    }
                    else{
                        $output['error'] = true;
                        $output['message'] = 'Product already in cart';
                        header('location: cart_view.php');
                    }
                }
            }

        } else {
            header('Location: index.php');
        }
		
	} else {
        header('Location: index.php');
    }
?>
</html>