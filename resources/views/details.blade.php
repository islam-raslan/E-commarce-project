<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/details.css">
    
</head>
<body>
    <!-------------navbar------------->
      
<!-- Name -->
  <nav class="navbar navbar-icon-top navbar-expand-lg navbar-light bg-'light'">
    <img src="../img/online-shopping.png" style="width:45px; height: 45px;">
        <a class="navbar-brand col-md-2" href="">Online Shopping</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- search -->
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-7">
                    <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Have a question? Ask Now"> <button class="btn btn-primary">Search</button> </div>
                </div>
            </div>
        </div>
<!-- icons -->
      <ul class="navbar-nav col-md-3">
        <!-- home icon -->
        <li class="nav-item active">
          <a class="nav-link" href="HomePage.html">
            <i class="fa fa-home"></i>
            <span class="sr-only">(current)</span>
            </a>
        </li>
<!-- cart icon -->
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fa fa-shopping-cart" aria-hidden="true">
              <span class="badge notifications badge-danger">11</span>
            </i>
            
          </a>
        </li>
        <!-- sittings icon-->
        <li class="nav-item dropdown">
          <a class="nav-link " href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-cog" aria-hidden="true">
            </i>
          </a>
          <div class="dropdown-menu menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="">Help</a>
            <a class="dropdown-item" href="">About</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logIn.html">log Out</a>
          </div>
        </li>
        <!-- dark/light mode icon-->
        <li class="nav-item">
          <div class="one-quarter" id="switch">

              <input type="checkbox" class="checkbox" id="chk" />
              <label class="label" for="chk">
                  <i class="fas fa-moon"></i>
                  <i class="fas fa-sun"></i>
                  <div class="ball"></div>
              </label>
              </div>
        </li>

      </ul>
    </div>
  </nav>
  <!-- ------------------------------------------- -->
  <form action="{{url('/details/'.$product->id)}}" method="POST">
  @csrf
  <div class="container-fliud">
    <div class="card">
        <div class="container">
            <div class="wrapper row">
            <input type="text" name="type" value="1" style="display: none">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{$product['image']}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../img/2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../img/3.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="carouselExampleFade" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="carouselExampleFade" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                <div class="details col-md-6">
                                                <!-- catagiroy -->
                 

                    <h3 class="product-title">{{$product['name']}}</h3>
                   
                    <p class="product-description">{{$product['description']}}</p>
                    <h4>current price: <span class="price">{{$product['price']}}$</span></h4>
                    <h4>total price: <input readonly class="total-price" value="{{$product['price']}}" name="total_price"></h4>

                   
                    
                    
                       
                  
                    <input class="my-2 quantity-field" type="number" value="1" min="1" name="quantity">
                   
                    
                        
                    <div >
                        <button class="add-to-cart btn  btn-primary" type="submit">add to cart</button>
                        <button class="like btn btn-danger rounded-circle" type="button"><span class="fa fa-heart"></span></button>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div></form>
<!-- ////////////////////////////////////comments/////////////////////////////////// -->
<div class="container">
    <div class="be-comment-block">
        <h1 class="comments-title">Comments</h1>
        <div class="All-comment">
        @foreach($comment as $c)
        <div class="be-comment">
            <div class="be-img-comment">	
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
            </div>
            <div class="be-comment-content">
                    <span class="be-comment-name">
                        <p>{{$c->name}}</p>
                        </span>
                    <span class="be-comment-time">
                        <i class="fa fa-clock-o"></i>
                        {{$c->created_at}}
                    </span>
    
                <p class="be-comment-text">
                
                  {{$c->comment}}
                
                    
                </p>
            </div>
        </div>
        @endforeach
      </div>
     <!-- comment part  -->
     <form action="{{url('/details/'.$product->id)}}" method="POST">
     @csrf
      <div class="writ-Comment-Her d-flex justify-content-around container">
          <input type="text" name="type" value="2" style="display: none">
          <input class="form-control mr-3 Write-her" id="Comment" type="text" name="comment"  placeholder="writ Comment Her">
          <button type="submit" class="btn btn-success comment">comment</button>
      </div>
     </form>
    </div>
    </div>
    <!-- ///////////////////////////////////////// -->
    <a id="back-to-top" href="" type="su" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

  
</div>
  </body>
        <script src="/js/jquery-3.5.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="/js/bootstrap.min.js"></script>
        
        <script>
          const total_price = document.querySelector(".total-price");
          const quantity = document.querySelector(".quantity-field");
          const price = document.querySelector(".price");

          quantity.addEventListener("change", () => {
            total_price.value = parseInt(quantity.value) * parseInt(price.innerHTML);
          });
        </script>
</html>