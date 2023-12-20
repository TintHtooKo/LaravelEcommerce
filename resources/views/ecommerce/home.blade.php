@extends('layouts.base')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('assets/img/couple-together-christmas-street.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/portrait-smiling-beautiful-girl-her-handsome-boyfriend-woman-casual-summer-dress-man-jeans-happy-cheerful-family-female-having-fun-street-near-wall.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/young-emotional-man-woman-pink-blue.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/walking-rain-umbrella-with-my-baby.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="reason reveal">
    <div class="parag">
        <h4>"EasyMart is your ultimate guide to the ever-evolving world of fashion and accessories."</h4>
        <br>
        <p>"EasyMart for All Seasons" is your year-round style destination, offering 
            a diverse array of fashion inspiration and accessory choices tailored to 
            every season. In spring, explore fresh floral prints, pastel palettes, and
            lightweight fabrics for a rejuvenated wardrobe. When summer arrives, find
            the perfect swimsuits, sunglasses, and airy outfits to stay cool and 
            chic under the sun. For fall, embrace cozy knits, autumnal hues, and 
            layering techniques to transition seamlessly into cooler weather. And 
            in winter, discover an array of stylish coats, scarves, and accessories
            that combine warmth with fashion-forward sensibilities. Our 
            season-specific fashion guides keep you informed about the latest 
            trends, ensuring you're ready to conquer each season with panache.</p>
        <p id="para">EasyMart isn't just about following trends; it's a platform that celebrates 
            individuality. Explore fashion profiles of influencers and trendsetters who 
            have carved their unique style niche. Uncover the stories behind iconic fashion 
            brands and their creative minds, discovering the inspiration that drives their 
            collections. Whether you're a seasoned fashionista or a budding style enthusiast,
            our curated content is designed to empower you with knowledge, inspiration, and 
            the confidence to express yourself through clothing and accessories. At Mode 
            Maven, we believe fashion is a reflection of your inner self – it's an art, a 
            passion, and a journey. Join us on this stylish adventure and become the master 
            of your fashion destiny.</p>

        <button>Read More</button>          
     </div>
        <div>
            <img src="{{asset('assets/img/aku cinta_ Photo.jfif')}}" alt="">
        </div>
    </div>

    <div class="collect" >
        <div class="phos reveal">
            <img src="{{asset('assets/img/Untitled-1.jpg')}}" alt="">
        </div>

        <div class="coll reveal">
            <center>
                <div>
                    <img src="{{asset('assets/img/Fashion Lapel Pockets Solid .jfif')}}" alt=""><br><br>
                    <h3>Men's Collections</h3>
                </div>
                <br><br><br>
                <div>
                    <img src="{{asset('assets/img/20 Cute Winter Outfits for Women.jfif')}}" alt=""><br><br>
                    <h3>Women's Collections</h3>
                </div>
                <br><br><br>
                <div>
                    <img src="{{asset('assets/img/An Error Has Occured.jfif')}}" alt=""><br><br>
                    <h3>Shoes Collections</h3>
                </div>
            </center>
            </div>
    </div>

@endsection