@extends('layouts.web')
 @section('content')
 <!-- Main Content - start -->
 @php
	 $index = 0;
 @endphp
<main>
	<section class="container">


		<ul class="b-crumbs">
	
			<li>
				<span>{{ $product->name }}</span>
			</li>
		</ul>
		<h1 class="main-ttl"><span>{{ $product->name }}</span></h1>
		<!-- Single Product - start -->
		<div class="prod-wrap">

			<!-- Product Images -->
			<div class="prod-slider-wrap">
				<div class="prod-slider">
					<ul class="prod-slider-car">
						@foreach ($product->media as $item)
						<li>
							<a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x642">
								<img src="{{ asset('images/'.$item->image_path) }}" alt="">
							</a>
						</li>
						@endforeach
						
						
					</ul>
				</div>
				<div class="prod-thumbs">
					<ul class="prod-thumbs-car">
						
						@foreach ($product->media as $item)
						<li>
							<a data-slide-index="{{ $index + 1 }}" href="#">
								<img src="{{ asset('images/'.$item->image_path) }}" alt="">
							</a>
						</li>
						@endforeach
						
					</ul>
				</div>
			</div>

			<!-- Product Description/Info -->
			<div class="prod-cont">
				<div class="prod-cont-txt">
					{{ $product->description }}
				</div>
				<p class="prod-actions">
					
				</p>
				<div class="prod-skuwrap">
					
					<label for="cars">Choose size</label>

						<select name="size" id="cars">
							@foreach ($size_product as $item)
							<option value="{{ $item->size->id }}">{{ $item->size->size }}</option>
							@endforeach
						
					
						</select>
				</div>
				<div class="prod-info">
					<p class="prod-price">
						<b class="item_current_price">{{ $product->price }} $</b>
					</p>
					<p class="prod-qnt">
						<input value="1" type="text" id="sl">
						<a  class="prod-plus" onclick="add()"><i class="fa fa-angle-up"></i></a>
						<a  class="prod-minus" onclick="minus()"><i class="fa fa-angle-down"></i></a>
					</p>
					<script>
						let myElement = document.getElementById("sl")
						function add(){
							myElement.value  = Number(myElement.value) + 1

						}	
						function minus(){
							if(myElement.value>1)
							{
								myElement.value  = myElement.value - 1
							}
							
							
						}

					</script>
					<p class="prod-addwrap">
						<a href="/add_product/{{ $product->id }}" class="prod-add" rel="nofollow">Add to cart</a>
					</p>
				</div>
				<ul class="prod-i-props">
					
				</ul>
			</div>

			<!-- Product Tabs -->
			<div class="prod-tabs-wrap">
				<ul class="prod-tabs">
					<li><a data-prodtab-num="1" class="active" href="#" data-prodtab="#prod-tab-1">Description</a></li>
					<li><a data-prodtab-num="2" id="prod-props" href="#" data-prodtab="#prod-tab-2">Features</a></li>
					<li><a data-prodtab-num="3" href="#" data-prodtab="#prod-tab-3">Video</a></li>
					<li><a data-prodtab-num="4" href="#" data-prodtab="#prod-tab-4">Articles (6)</a></li>
					<li><a data-prodtab-num="5" href="#" data-prodtab="#prod-tab-5">Reviews (3)</a></li>
				</ul>
				<div class="prod-tab-cont">

					<p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Description</p>
					<div class="prod-tab stylization" id="prod-tab-1">
						<p>{{ $product->description }}</p>
					</div>
					<p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Features</p>
					<div class="prod-tab prod-props" id="prod-tab-2">
						<table>
							<tbody>
							<tr>
								<td>SKU</td>
								<td>05464207</td>
							</tr>
							<tr>
								<td>Material</td>
								<td>Nylon</td>
							</tr>
							<tr>
								<td>Pattern Type</td>
								<td>Solid</td>
							</tr>
							<tr>
								<td>Wash</td>
								<td>Colored</td>
							</tr>
							<tr>
								<td>Style</td>
								<td>Sport</td>
							</tr>
							<tr>
								<td>Color</td>
								<td>Blue</td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>Unisex</td>
							</tr>
							<tr>
								<td>Rain Cover</td>
								<td>No</td>
							</tr>
							<tr>
								<td>Exterior</td>
								<td>Solid Bag</td>
							</tr>
							<tr>
								<td>Closure Type</td>
								<td>Zipper</td>
							</tr>
							<tr>
								<td>Handle/Strap Type</td>
								<td>Soft Handle</td>
							</tr>
							<tr>
								<td>Size</td>
								<td>33cm x 18cm x 48cm</td>
							</tr>
							</tbody>
						</table>
					</div>
					<p data-prodtab-num="3" class="prod-tab-mob" data-prodtab="#prod-tab-3">Video</p>
					<div class="prod-tab prod-tab-video" id="prod-tab-3">
						<iframe width="853" height="480" src="https://www.youtube.com/embed/kaOVHSkDoPY?rel=0&amp;showinfo=0" allowfullscreen></iframe>
					</div>
					<p data-prodtab-num="4" class="prod-tab-mob" data-prodtab="#prod-tab-4">Articles (6)</p>
					<div class="prod-tab prod-tab-articles" id="prod-tab-4">
						<div class="flexslider post-rel-wrap" id="post-rel-car">
							<ul class="slides">
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/354x236)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>09</span> Feb</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Articles</a>
										<h3 class="posts-i-ttl"><a href="post.html">Adipisci corporis velit</a></h3>
									</div>
								</li>
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/360x203)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>05</span> Jan</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Reviews</a>
										<h3 class="posts-i-ttl"><a href="post.html">Excepturi ducimus recusandae</a></h3>
									</div>
								</li>
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/360x224)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>17</span> Apr</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Reviews</a>
										<h3 class="posts-i-ttl"><a href="post.html">Consequuntur minus numquam</a></h3>
									</div>
								</li>
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/314x236)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>21</span> May</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Articles</a>
										<h3 class="posts-i-ttl"><a href="post.html">Non ex sapiente excepturi</a></h3>
									</div>
								</li>
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/318x236)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>24</span> Jan</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Articles</a>
										<h3 class="posts-i-ttl"><a href="post.html">Veritatis officiis</a></h3>
									</div>
								</li>
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/354x236)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>08</span> Sep</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Reviews</a>
										<h3 class="posts-i-ttl"><a href="post.html">Ratione magni laudantium</a></h3>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<p data-prodtab-num="5" class="prod-tab-mob" data-prodtab="#prod-tab-5">Reviews (3)</p>
					<div class="prod-tab" id="prod-tab-5">
						<ul class="reviews-list">

							@if ($reviews!=null)
							@foreach ($reviews as $item)
							<li class="reviews-i existimg">
								<div class="reviews-i-img">
									
									<div class="reviews-i-rating">
										@for ($i = 0; $i < $item->rating; $i++)
											<i class="fa fa-star"></i>
										@endfor
										
										
									</div>
									<time datetime="{{ $item->created_at }}" class="reviews-i-date">{{ $item->created_at->toFormattedDateString(); }}</time>
								</div>
								<div class="reviews-i-cont">
									<p>{{ $item->review }}</p>
									<span class="reviews-i-margin"></span>
									<h3 class="reviews-i-ttl">{{ $item->user->name }}</h3>
									<p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
								</div>
								<div class="reviews-i-answer">
									<p>Thanks for your feedback!<br>
										Nostrum voluptate autem, eaque mollitia sed rem cum amet qui repudiandae libero quaerat veniam accusantium architecto minima impedit. Magni illo illum iure tempora vero explicabo, esse dolores rem at dolorum doloremque iusto laboriosam repellendus. <br>Numquam eius voluptatum sint modi nihil exercitationem dolorum asperiores maiores provident repellat magnam vitae, consequatur omnis expedita, accusantium voluptas odit id.</p>
									<span class="reviews-i-margin"></span>
								</div>
							</li>
							@endforeach
							
							@endif
							
							
						</ul>
						<div class="prod-comment-form">
							<h3>Add your review</h3>
							<form method="POST" action="/review/{{ $product->id }}">
								@csrf
								@method('post')
								<input type="text" name="name" placeholder="Name">
								<input type="text" name="email" placeholder="E-mail">
								<textarea name="review" placeholder="Your review"></textarea>
								<div class="prod-comment-submit">
									<input type="submit" value="Submit">
									<div class="personal-rating">
										<h6>Your Rating</h6>
										<div class="rate">
											<input type="radio" id="star5" name="rating" value="5" />
											<label for="star5" title="text">5 stars</label>
											<input type="radio" id="star4" name="rating" value="4" />
											<label for="star4" title="text">4 stars</label>
											<input type="radio" id="star3" name="rating" value="3" />
											<label for="star3" title="text">3 stars</label>
											<input type="radio" id="star2" name="rating" value="2" />
											<label for="star2" title="text">2 stars</label>
											<input type="radio" id="star1" name="rating" value="1" />
											<label for="star1" title="text">1 star</label>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Single Product - end -->

		<!-- Related Products - start -->
		<div class="prod-related">
			<h2><span>Related products</span></h2>
			<div class="prod-related-car" id="prod-related-car">
				<ul class="slides">
					<li class="prod-rel-wrap">


						@foreach ($related_product as $item)
						@if ($item->id != $product->id)
						<div class="prod-rel">
							<a href="product.html" class="prod-rel-img">
								<img src="{{ asset('images/'.$item->image_path) }}" alt="Adipisci aperiam commodi">
							</a>
							<div class="prod-rel-cont">
								<h3><a href="product.html">{{ $item->name }}</a></h3>
								<p class="prod-rel-price">
									<b>$59</b>
								</p>
								<div class="prod-rel-actions">
									<a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
									<a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
									<p class="prod-i-addwrap">
										<a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
									</p>
								</div>
							</div>
						</div>
						@endif
							
						
						@endforeach





						

					</li>
				</ul>
			</div>
		</div>
		<!-- Related Products - end -->

	</section>
</main>
<!-- Main Content - end -->

 
    @endsection