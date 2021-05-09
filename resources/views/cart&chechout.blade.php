<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../library/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="../CSS/cart.css">
    <title>Cart</title>
</head>
<body>
    
  <div class=" container-fluid mt-2 rounded">
    <div class="row ">
        <div class="col-sm-12">
  
        <div class=" row ">
          <div class="col-md-8 bg-light h6 rounded h-100">
          <div class="basket-labels">
            <ul class="">
              <li class="item item-heading">Item</li>
              <li class="price">Price</li>
              <li class="quantity">Quantity</li>
              <li class="subtotal">Subtotal</li>
            </ul>
          </div>
          <div class="basket-product">
            <div class="item">
              <div class="product-image">
                <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
              </div>
              <div class="product-details">
                
                <h1>asdads</h1>
                <p>Navy, Size 18</p>
                <p>Product Code - 232321939</p>
              </div>
            </div>
            <div class="price">26.00</div>
            <div class="quantity">
              <input type="number" value="4" min="1" class="quantity-field">
            </div>
            <div class="subtotal">104.00</div>
            <div class="remove">
              <button class="btn btn-primary">Remove</button>
            </div>
          </div>
          <div class="basket-product">
            <div class="item">
              <div class="product-image">
                <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
              </div>
              <div class="product-details">
                <h1><span class="item-quantity">1</span> x Whistles Amella Lace Midi Dress</h1>
                <p>Navy, Size 10</p>
                <p>Product Code - 232321939</p>
              </div>
            </div>
            <div class="price">26.00</div>
            <div class="quantity">
              <input type="number" value="1" min="1" class="quantity-field">
            </div>
            <div class="subtotal">26.00</div>
            <div class="remove">
              <button class="btn btn-primary">Remove</button>
            </div>
          </div>
        </div> 
        

        <div class=" col-md-3 ">
          

            <div class="card container-fluid  py-5 bg-dark">

              <div class="bg-light mb-4 py-3 container-fluid rounded h6">
                <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
                <div class="summary-subtotal">
                 
                  <div class="summary-promo hide">
                    <div class="promo-title">Promotion</div>
                    <div class="promo-value final-value" id="basket-promo"></div>
                  </div>
                </div>
                
                <div class="summary-total">
                  <div class="total-title">Total</div>
                  <div class="total-value final-value" id="basket-total">130.00</div>
                </div>
                <div class="summary-checkout ">
                 
    
                </div>
                  </div>
              <div class=" mx-auto  h3"> Payment </div>
              
              <form> <p class="card-header h6">Saved cards:</p>
                  <div class="row my-1">
                      <div class="col-2"><img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /></div>
                      <div class="col-7"> <input class="form-control" type="text" placeholder="***** **** 3193"> </div>
                      <div class="col-3 d-flex justify-content-center"> <a href="#">Remove</a> </div>
                  </div>
                  <div class="row my-1">
                      <div class="col-2"><img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" /></div>
                      <div class="col-7"> <input class="form-control" type="text" placeholder="***** **** 4296"> </div>
                      <div class="col-3 d-flex justify-content-center"> <a href="#">Remove</a> </div>
                  </div>
                   
                  
                  <div class="row three">
                      <div class="col-7">
                          <div class="row">
                              <div class="row-100 "> <span class="card-inner h5">Card number</span> </div>
                              <div class="row mx-auto"> <input class="form-control" type="text" placeholder="5134-5264-4"> </div>
                          </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col-sm my-2"> <input class="form-control" type="text" placeholder="Exp. date"> </div>
                      <div class="w-100"></div>

                      <div class="col-sm"> <input class="form-control" type="text" placeholder="CVV"> </div>
                  </div> <button class="btn btn-primary my-1 ">check out</button>
              </form>
          </div>

            
            
            </div>



            
          </div>
          </div>
          </div>
        </div>

          
       


        
       

        

      
      
      <script src="/js/jquery-3.5.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script src="/js/cart.js"></script>
      <script src="/js/wow.min.js"></script>
      <script src="/js/all.min.js"></script>
    
      <script>
        new WOW().init();
      </script>
</body>
</html>






