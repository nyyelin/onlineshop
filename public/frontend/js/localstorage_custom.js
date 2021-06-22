// file name = public/frontend/js/localstorage_custom.js


// id / name /photo 
$(document).ready(function(){
	// alert('hi');


	// to use ajax post method we need ajaxsetup and meta tag

	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});


	showcart();
	cartnoti();
	$('.btn_add_to_cart').click(function(){
		// alert('hi');
		var id = $(this).data('id');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		var discount = $(this).data('discount');
		var user_id = $(this).data('user_id');
		console.log(id);
		console.log(name);
		console.log(photo);
		console.log(price);
		console.log(discount);


		var cart = localStorage.getItem('cart');
		if(!cart)
		{
			var mycart = new Array();
		}else{
			var mycart = JSON.parse(cart);
		}
			var item = {
				id:id,
				name:name,
				photo:photo,
				price:price,
				discount:discount,
				user_id:user_id,
				qty:1
			};

			var hasid = false;
			$.each(mycart,function(i,v){
				if(v.id == id)
				{
					hasid = true;
					v.qty++;
				}
			})
			if(!hasid){
				mycart.push(item);
			}
			localStorage.setItem('cart',JSON.stringify(mycart));
			cartnoti()
		// id / name / photo / qty

	})


	$('.show_item_by_category').on('click','.btn_add_to_cart_ajax',function(){
		// alert('hi');
		var id = $(this).data('id');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		var discount = $(this).data('discount');
		var user_id = $(this).data('user_id');
		console.log(id);
		console.log(name);
		console.log(photo);
		console.log(price);
		console.log(discount);


		var cart = localStorage.getItem('cart');
		if(!cart)
		{
			var mycart = new Array();
		}else{
			var mycart = JSON.parse(cart);
		}
			var item = {
				id:id,
				name:name,
				photo:photo,
				price:price,
				discount:discount,
				user_id:user_id,
				qty:1
			};

			var hasid = false;
			$.each(mycart,function(i,v){
				if(v.id == id)
				{
					hasid = true;
					v.qty++;
				}
			})
			if(!hasid){
				mycart.push(item);
			}
			localStorage.setItem('cart',JSON.stringify(mycart));
			cartnoti()
		// id / name / photo / qty

	})

	function showcart()
	{
		var mycart = localStorage.getItem('cart');
		if(mycart)
		{
			var mycartobj = JSON.parse(mycart);
			var html = '';
			var j = 1;
			var total=0;
			var subtotal=0;

			$.each(mycartobj,function(i,v){
				subtotal += v.qty*v.price;
				total+=subtotal;
				html+=`<tr>
			              <td>
			                <button class="btn btn-outline-danger remove btn-sm" style="border-radius: 50%" data-id = ${i}> 
			                  <i class="icofont-close-line"></i> 
			                </button> 
			              </td>
			              <td> 
			                <img src="${v.photo}" class="cartImg">           
			              </td>
			              <td> 
			                <p> ${v.name} </p>
			                
			              </td>
			              <td>
			                <button class="btn btn-outline-secondary plus_btn" data-id = ${i}> 
			                  <i class="icofont-plus"></i> 
			                </button>
			              </td>
			              <td>
			                <p> ${v.qty} </p>
			              </td>
			              <td>
			                <button class="btn btn-outline-secondary minus_btn" data-id = ${i}> 
			                  <i class="icofont-minus"></i>
			                </button>
			              </td>
			              <td>
			                <p class="text-danger"> 
			                  ${v.price} Ks
			                </p>
			                <p class="font-weight-lighter"> 
			                <del> ${v.discount} Ks </del> </p>
			              </td>
			              <td>
			                ${subtotal} Ks
			              </td>
			            </tr>`;
			})
			html+= `<h3 class="text-right"> Total : ${total} Ks </h3>`
			$('#shoppingcart_table').html(html);
			var cart_view='';
			cart_view = `There are your choice items to buy`;
			$('.cart_view').html(cart_view);

		}else{
			$('#shoppingcart_table').html('');
			$('.cart_view').html('There are no items in your cart!')

		}
	}

	// increase qty

	$('#shoppingcart_table').on('click','.plus_btn',function(){
		var id = $(this).data('id');
		// alert(id);

		var mycart = localStorage.getItem('cart');
		if(mycart)
		{
			var mycartobj = JSON.parse(mycart);
			$.each(mycartobj,function(i,v){
				if(i == id){
					v.qty++;
				}
			})
			localStorage.setItem('cart', JSON.stringify(mycartobj));
			showcart();
			cartnoti()
		}
	})

	// decrease qty

	$('#shoppingcart_table').on('click','.minus_btn',function(){
		var id = $(this).data('id');
		// alert(id);

		var mycart = localStorage.getItem('cart');
		if(mycart)
		{
			var mycartobj = JSON.parse(mycart);
			$.each(mycartobj,function(i,v){
				if(i == id){
					v.qty--;
					if(v.qty == 0)
					{
						var ans = confirm("Are you suer remove this item?");
						if(ans)
						{
							mycartobj.splice(id,1);
						}else{
							v.qty=1;
						}
					}
				}
			})
			localStorage.setItem('cart', JSON.stringify(mycartobj));
			showcart();
			cartnoti()
		}
	})

	$('#shoppingcart_table').on('click','.remove',function(){
		var id = $(this).data('id');
		var mycart = localStorage.getItem('cart');
		if(mycart)
		{
			var mycartobj = JSON.parse(mycart);
			$.each(mycartobj,function(i,v){
				if(i == id)
				{
					var ans = confirm("Are you suer remove this item?");
					if(ans)
					{
						mycartobj.splice(id,1);
					}
				}
			})
			localStorage.setItem('cart', JSON.stringify(mycartobj));
			showcart();
			cartnoti()

		}

	})


	function cartnoti()
	{
		var mycart = localStorage.getItem('cart');
		if(mycart){
			var mycartobj = JSON.parse(mycart);
			var cart = 0;
			var total=0;
			$.each(mycartobj,function(i,v){
				cart += v.qty;
				var price = parseInt(v.price);
				total+=price;
			});
			var totalprice = total+' ks';
			$('.cartNoti').html(cart);
			$('.price').html(totalprice);
		}else{
			var totalprice = 0 + " ks"
			$('.cartNoti').html(0);
			$('.price').html(totalprice);
		}

	}


	$('.buy_now').click(function(){
		var note = $('.note').val();
		var mycart = localStorage.getItem('cart');
		if(mycart){
			$.post('/orders',{mycart:mycart,note:note},function(res){
				alert(res);
				localStorage.clear();
				showcart();
				window.location.href='/';
			})
		}
	})


	$('.btn_logout').click(function(){
		localStorage.clear();
		cartnoti();
	});

	$('.category_select').click(function(){
		// alert('message?: DOMString');
		var category_array = $(this).data('array');
		var key = $(this).data('key');
		var id = $(this).data('id');
		var auth = $(this).data('auth');
		// alert(auth);
		// console.log(category_array+'/'+key);
		for (var i = 0; i < category_array.length; i++) {
			if(i == key)
			{

				$('.category'+[i]).addClass('active');
				$('.collapse_show'+[i]).addClass('show');

				$.post('/filterwithcategory',{id:id},function(res){
					var html='';
					var category_name = '';
					$.each(res.subcategories,function(i,v){
						$.each(v.items,function(a,b){
							console.log(b.photo);
							html+=`<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

						            <div class="card pad15 mb-3">
						                <img src="/${b.photo}" class="card-img-top" alt="no imgae">
						                
						                <div class="card-body text-center">
						                  <a href="/detail/${b.id}" style="text-decoration: none; color: gray">
						                    <h5 class="card-title text-truncate">${b.name}</h5>
						                  
						                      <p class="item-price">
						                        <strike>${b.discount} Ks </strike> 
						                        <span class="d-block">${b.price} Ks</span>
						                      </p>
						                  </a>

						                <div class="star-rating">
						                  <ul class="list-inline">
						                      <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
						                      <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
						                      <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
						                      <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
						                      <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
						                  </ul>
						                </div>`;

						                 if(auth=="Customer"){
							                html +=  `<a href="javascript:void(0)" class="addtocartBtn text-decoration-none btn_add_to_cart_ajax" 
							                data-id = ${b.id} data-name = ${b.name} data-photo = ${b.photo}
							                 data-price= ${b.price} data-discount = ${b.discount}
							                 data-user_id = "{{Auth::id()}}">Add to Cart</a>`;
							             }else if(auth=="Admin"){
							             	html += `<a href="javascript:void(0)" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now"> 
					                          You are not Customer
					                        </a>`;
							             }else {
					
							                  html+= `<a href="/loginpage" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now"> 
							                    Login To Check Out
							                  </a>`;
							            }

						                
						              html+= `</div>
						            </div>
						          </div>`;
						})

						
					})
					category_name = `<li class="breadcrumb-item">
								            <a href="/" class="text-decoration-none secondarycolor"> ${res.name} </a>
								          </li>`;
					$('.category_name').html(category_name);
					$('.show_item_by_category').html(html);
				})

			}else{
				// $('.collapse_show'+[i]).removeClass('show');

				$('.category'+[i]).removeClass('active');

			}

		}
	})

	$('.input_photo').change(function(){

		readURL(this);
		function readURL(input)
		{
			if(window.File,window.FileReader,window.Filelist,window.Blob){
	  				var input_image = input.files;
	  				var reader = new FileReader();
	  				reader.onload=function(e){
	  					$('.show_photo').attr('src',e.target.result).width('120px').height('100px');
	  				};
	  				reader.readAsDataURL(input.files[0]);
	  			}
		}
	})




})