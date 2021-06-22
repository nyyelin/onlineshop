$(document).ready(function(){

	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});


	$('.search_date').click(function(){
		var startdate = $('.startdate').val();
		var enddate = $('.enddate').val();
		
		$.post('/order_search',{startdate:startdate,enddate:enddate},function(res){
			var html='';
			var j=1;
			var total = 0;
			$.each(res,function(i,v){
				$.each(v.items,function(a,b){
					// console.log(v);
					total+=b.pivot.qty*b.price;
						html+=`<tr>
		    					<td>${j++}</td>
		    					<td>${v.voucherno}</td>
		    					<td>${v.user.name}</td>
		    					<td>${total} MMK</td>
		    					<td>
		    						<a href="orders/${v.id}" class="btn btn-primary">Detail</a>
		    						
		                            <a href="#" class="btn btn-success">Confirm</a>

		    						<a href="#" class="btn btn-danger">Delete</a>
		    					</td>
		    				</tr>`;
				})
				
			});
			$('.order_search_list').html(html);
		})

	});
})