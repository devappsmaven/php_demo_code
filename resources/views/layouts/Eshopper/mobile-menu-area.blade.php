<header class="nav-top visible-sm visible-xs">
		<span class="hamburger material-icons" id="ham">menu</span>
	</header>
	
	<nav class="nav-drill visible-sm visible-xs">
	  <ul class="nav-items nav-level-1">
		<li class="nav-item">
			<a class="nav-link nav-expand-link" href="{{asset('index')}}">
				Home
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{asset('designstudio')}}">
				Designstudio
			</a>
		</li>
		<li class="nav-item {{$productcategories->count() > 0 ? 'nav-expand' : '' }}"><a class="nav-link {{$productcategories->count() > 0 ? 'nav-expand-link' : '' }}" href="#">Products</a>
			@if($productcategories->count() > 0)
				<ul class="nav-items nav-expand-content">
					@foreach ($productcategories as $category)
				<li class="nav-item {{$category->subcategories->count() > 0 ? 'nav-expand' : '' }}"><a class="nav-link {{$category->subcategories->count() > 0 ? 'nav-expand-link' : '' }}" href="#">{{$category->name}}</a>
							@if($category->subcategories->count() > 0)
								<ul class="nav-items nav-expand-content">
									@foreach ($category->subcategories as $subcategory)
										<li class="nav-item">
											<a class="nav-link" href="#">
												{{$subcategory->name}}
											</a>
										</li>	
									@endforeach
								</ul>
							@endif
						</li>
					@endforeach
				</ul>
			@endif
		</li>
		<li class="nav-item {{$templatecategories->count() > 0 ? 'nav-expand' : '' }}"><a class="nav-link {{$templatecategories->count() > 0 ? 'nav-expand-link' : '' }}" href="#">Design Templates</a>
			@if($templatecategories->count() > 0)
				<ul class="nav-items nav-expand-content">
					@foreach ($templatecategories as $category)
				<li class="nav-item {{$category->subcategories->count() > 0 ? 'nav-expand' : '' }}"><a class="nav-link {{$category->subcategories->count() > 0 ? 'nav-expand-link' : '' }}" href="#">{{$category->name}}</a>
							@if($category->subcategories->count() > 0)
								<ul class="nav-items nav-expand-content">
									@foreach ($category->subcategories as $subcategory)
										<li class="nav-item">
											<a class="nav-link" href="#">
												{{$subcategory->name}}
											</a>
										</li>	
									@endforeach
								</ul>
							@endif
						</li>
					@endforeach
				</ul>
			@endif
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{asset('contact-us')}}">
				Contact
			</a>
		</li>
	  </ul>
	</nav>