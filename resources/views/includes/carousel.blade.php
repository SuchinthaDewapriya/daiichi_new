<style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
      
            margin: auto;
            height:auto;
        }
        </style>
      
      
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
      
      
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/kkkk.jpg')}}" alt="Chania" width="460" height="345">
            </div>
      
            <div class="item">
                <img src="{{asset('images/nnnnn.jpg')}}" alt="Chania" width="460" height="345">
            </div>
      
            <div class="item">
                <img src="{{asset('images/3.jpg')}}" alt="Chania" width="460" height="345">
            </div>
      
            <div class="item">
                <img src="{{asset('images/5.jpg')}}" alt="Flower" width="460" height="345">
            </div>
      <!--         <div class="item">
                   <img src="image/6.jpg" alt="Flower" width="460" height="345">
            </div>
               <div class="item">
                   <img src="image/7.jpg" alt="Flower" width="460" height="345">
            </div>
       <div class="item">
           <img src="image/8.jpg" alt="Flower" width="460" height="345">
            </div>-->
      
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
         <style>
            .carousel-control.left {
      background: transparent;
      
      }
      
      .carousel-control.right {
      background: transparent;
      
      }
        </style>
      